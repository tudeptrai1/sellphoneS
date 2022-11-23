<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function all()
    {
        $orders = Order::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách đơn hàng",
            'data'=>$orders,

        ];
        return response()->json($arr, 200);
    }

    public function index(Request $request)
    {

        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date !==null, function ($q) use ($request){
            return $q->whereDate('ordered_date',$request->date);
        },function ($q) use($todayDate){
            $q->orderByRaw('updated_at DESC');

        })->when($request->status !=null,function ($q) use ($request){
            return $q->where('status',$request->status);

        })
            ->paginate(10);

        $total=0;

        foreach($orders as $order){
            foreach($order->detail as $detail)
            {
                $total += $detail->quantity*$detail->product->sell_price;
            }
            $order->total = $total;
            $total=0;
        }
        return view('admin.order.index',
        [
            'order'=>$orders,
        ]);
    }
    public function get(Order $id)
    {
        $quantity = 0;
        $total=0;
        foreach($id->detail as $detail)
        {
            $quantity+=$detail->quantity;
            $total += $detail->quantity*$detail->product->sell_price;

        }


        $id->quantity = $quantity;
        $id->total = $total;
        $id->user;
        $id->address;
        $arr = [
            'status'  => true,
            'message' => "Chi tiết đơn hàng",
            'data'    => $id,

        ];
        return response()->json($arr, 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function view(Order $id)
    {

        $quantity = 0;
        $total=0;
       foreach($id->detail as $detail)
       {
           $quantity+=$detail->quantity;
           $total += $detail->quantity*$detail->product->sell_price;

       }


       $id->quantity = $quantity;
       $id->total = $total;

        return view('admin.order.detail',[
            'order'=>$id,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'payment_method' => 'required',

            'receive_name' => 'required',
            'receive_phone' =>'required',
            'province' => 'required',
            'ward' =>'required',
            'district' =>'required',
            'detail' =>'required',

]);
        if($validator->fails()){
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }


        Order::insert(
            ['user_id' => $input['user_id'], 'payment_method'=>$input['payment_method'],'payment_id'=>strtoupper('PAYAZS'.Str::random(5)), 'ordered_date' => now(),'status' => 'Waiting for confirm']
        );
  $order= Order::orderByRaw('ordered_date DESC')->get()->first();


        foreach($input['products'] as $product) {

            OrderDetail::insert(
                ['order_id' =>$order['id'] , 'product_id' => $product['id'], 'quantity' => $product['quantity']]
        );
        }
        UserAddress::insert([
            ['user_id' => $input['user_id'],'order_id' => $order->id,'receive_name'=>$input['receive_name'],'receive_phone'=>$input['receive_phone'],'province'=>$input['province'],'district'=>$input['district'],'ward'=>$input['ward'],'detail'=>$input['detail']]
        ]);

        $arr = ['status' => true,
            'message'=>"Đơn hàng đã lưu thành công",
            'data'=>$order,
        ];
        return response()->json($arr, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Order $id,Request $request)
    {

        if($id){
            $id->update([
                'status'=>$request->status_change,
            ]);
            return redirect()->route('order.view',$id->id)->with('message', 'Update Status Successfully');
        }

        return redirect()->route('order')->with('message', 'Order ID Not Found');
    }


    public function viewInvoice( Order $id)
    {
        return view('admin.invoice.generate',[
            'order'=>$id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
