<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
