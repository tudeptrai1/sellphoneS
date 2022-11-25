<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use App\Models\UserAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date !== null, function ($q) use ($request) {
            return $q->whereDate('ordered_date', $request->date);
        }, function ($q) use ($todayDate) {
            $q->orderByRaw('ordered_date DESC');

        })->when($request->status != null, function ($q) use ($request) {
            return $q->where('status', $request->status);

        })
            ->paginate(10);

        $total = 0;

        foreach ($orders as $order) {
            foreach ($order->detail as $detail) {
                $total += $detail->quantity * $detail->product->sell_price;
            }
            $order->total = $total;
            $total = 0;
        }
        return view('admin.order.index',
            [
                'order' => $orders,
            ]);
    }
    public function new(){
        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::where('ordered_date','>',$todayDate)->get();
        $total = 0;

        foreach ($orders as $order) {
            foreach ($order->detail as $detail) {
                $total += $detail->quantity * $detail->product->sell_price;
            }
            $order->total = $total;
            $total = 0;
        }
        return view('admin.order.index',
            [
                'order' => $orders,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function view(Order $id)
    {
        $quantity = 0;
        $total = 0;
        foreach ($id->detail as $detail) {
            $quantity += $detail->quantity;
            $total += $detail->quantity * $detail->product->sell_price;

        }

        $id->quantity = $quantity;
        $id->total = $total;

        return view('admin.order.detail', [
            'order' => $id,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $input = $request->all();
        $validator = Validator::make($input, [
            'user_id'        => 'required',
            'payment_method' => 'required',
            'receive_name'  => 'required',
            'receive_phone' => 'required',
            'province'      => 'required',
            'ward'          => 'required',
            'district'      => 'required',
            'detail'        => 'required',

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data'    => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        Order::insert(
            ['user_id' => $input['user_id'], 'payment_method' => $input['payment_method'], 'payment_id' => $input['payment_id'], 'ordered_date' => now(), 'status' => 'Waiting for confirm']
        );
        $order = Order::orderByRaw('ordered_date DESC')->get()->first();

        foreach ($input['products'] as $product) {
            OrderDetail::insert(
                ['order_id' => $order['id'], 'product_id' => $product['id'], 'quantity' => $product['amount_cart'], 'discount_id' => $product['discount'] !== null ? $product['discount']['id'] : 0]
            );

            Product::find($product['id'])->update(['amount' => DB::raw('amount - '.$product['amount_cart'])]);

        }
        UserAddress::insert([
            ['user_id' => $input['user_id'], 'order_id' => $order->id, 'receive_name' => $input['receive_name'], 'receive_phone' => $input['receive_phone'], 'province' => $input['province'], 'district' => $input['district'], 'ward' => $input['ward'], 'detail' => $input['detail']]
        ]);

        $arr = ['status'  => true,
                'message' => "Đơn hàng đã lưu thành công",
                'data'    => $order,
        ];
        return response()->json($arr, 201);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function all()
    {
        $orders = DB::table('orders')->orderBy('ordered_date', 'desc')->get();
        $arr = [
            'status'  => true,
            'message' => "Danh sách đơn hàng",
            'data'    => $orders,

        ];
        return response()->json($arr, 200);
    }

    public function get(Request $request)
    {
        $orders = Order::find($request->id);
        if ($orders) {
            $details = Order::find($request->id)->detail;
            $products = [];
            $total_amount = 0;
            $total_product = 0;
            $total_discount = 0;
            $total_discount_coupons = 0;
            foreach ($details as $p) {
                $product = Product::find($p->product_id);
                $brand = ProductGroup::find($product->pg_id)->brand;
                $product->brand = $brand;
                $image = ProductGroup::find($product->pg_id)->images->where('color_id', '=', $product->color_id)->first();
                $product->images = [$image->image1, $image->image2, $image->image3, $image->image4, $image->image5];

                $techSpecs = TechSpec::all();
                $techSpecDetail = ProductGroup::find($product->pg_id)->tech_spec;
                $length = count($techSpecDetail);
                $tech = [];
                for ($i = 0; $i < $length; $i++) {
                    $temp = (object)['name' => $techSpecs[$i]->name, 'value' => $techSpecDetail[$i]->value];
                    array_push($tech, $temp);
                }
                $product->tech_specs = $tech;
                $discount = Discount::find($p->discount_id);
                $product->discount = $discount;
                $product->ordered_amount = $p->quantity;

                $total_amount += $p->quantity;
                $total_product += $product->sell_price * $p->quantity;
                $total_discount += $product->discount !== null ? (($product->discount->discount_value * $product->sell_price) / 100) * $p->quantity : 0;
                $total_discount_coupons = 0;

                array_push($products, $product);
            }
            unset($details);
            $address = UserAddress::whereOrderId($request->id)->first();
            $orders->products = $products;
            $orders->address = $address;

            $orders->total_amount = $total_amount;
            $orders->total_discount = $total_discount;
            $orders->total_product = $total_product;
            $orders->total_discount_coupons = $total_discount_coupons;

        }
        $arr = [
            'status'  => true,
            'message' => "Chi tiết đơn hàng",
            'data'    => $orders,

        ];
        return response()->json($arr, 200);
    }

    public function getAll(Request $request)
    {
        $res=[];
        $orders = DB::table('orders')->where('user_id', $request->user_id)->orderBy('ordered_date', 'DESC')->get();
        if ($orders) {
            $amount = 0;
            $total = 0;

            foreach ($orders as $order) {
                $details = Order::find($order->id)->detail;

                $total_amount = 0;
                $total_product = 0;
                $total_discount = 0;
                $total_discount_coupons = 0;
                foreach ($details as $p) {
                    $product = Product::find($p->product_id);
                    $discount = Discount::find($p->discount_id);
                    $product->discount = $discount;
                    $product->ordered_amount = $p->quantity;
                    $total_amount += $p->quantity;
                    $total_product += $product->sell_price * $p->quantity;
                    $total_discount += $product->discount !== null ? (($product->discount->discount_value * $product->sell_price) / 100) * $p->quantity : 0;
                    $total_discount_coupons = 0;
                }
                unset($details);
                $order->total_amount = $total_amount;
                $order->total_discount = $total_discount;
                $order->total_product = $total_product;
                $order->total_discount_coupons = $total_discount_coupons;
                $amount += $order->status=== "Completed" ?$total_amount:0;
                $total += $order->status=== "Completed" ?$total_product - $total_discount - $total_discount_coupons:0;
            }
            $res['amount'] = $amount;
            $res['total'] = $total;
            $res['count'] = $orders->count();
            $res['orders']=$orders;

        }
        $arr = [
            'status'  => true,
            'message' => "Đơn hàng",
            'data'    => $res,

        ];
        return response()->json($arr, 200);
    }
    public function cancel(Request $request){
        $res = DB::table('orders')
            ->where('id', $request->id)
            ->where('user_id', $request->user_id)
            ->where('payment_method', 'Cash in Delivery')
            ->where('status', 'Waiting for confirm')
            ->update(['status' => 'Canceled']);
        $arr = [
            'status'  => true,
            'message' => "Huỷ đơn",
            'data'    => $res,
        ];
        return response()->json($arr, 200);
    }
    public function recent(Request $request)
    {
        $id = DB::table('orders')->whereUserId($request->user_id)->wherePaymentId($request->payment_id)->select('id')->get()->first();
        $arr = [
            'status'  => true,
            'message' => "Chi tiết đơn hàng",
            'data'    => $id->id,

        ];
        return response()->json($arr, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Order $id, Request $request)
    {

        if ($id) {
            $id->update([
                'status' => $request->status_change,
            ]);
            return redirect()->route('order.view', $id->id)->with('message', 'Update Status Successfully');
        }

        return redirect()->route('order')->with('message', 'Order ID Not Found');
    }


    public function viewInvoice(Order $id)
    {
        $total=0;
        foreach ($id->detail as $detail) {

            $total += $detail->quantity * $detail->product->sell_price;

        }
        $id->total = $total;

        return view('admin.invoice.generate', [
            'order' => $id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
