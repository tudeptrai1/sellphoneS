<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $todayDate = Carbon::now()->format('Y-m-d');
        $order= Order::all()->count();
        $product = Product::all()->count();
        $user = User::all()->count();
        $admin = Admin::all()->count();
        $brand = Brand::all()->count();
        $new_order = Order::where('ordered_date','>',$todayDate)->count();
        $total=0;
        $orders= Order::all();
        foreach($orders as $each){
            foreach($each->detail as $detail)
            {
                $total += $detail->quantity*$detail->product->sell_price;
            }
        }
        $data =[
          'order'=>$order,
          'product'=>$product,
          'user'=>$user,
          'admin'=>$admin,
          'brand'=>$brand,
          'total'=>$total,
          'new_order'=>$new_order,
        ];
        return view('admin.dashboard',[
        'data'=>$data,
        ]);
    }

}
