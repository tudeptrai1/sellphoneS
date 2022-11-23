<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function cart($userid): \Illuminate\Http\JsonResponse
    {
        $cart=DB::table('carts')->whereUserId($userid)->get();
        $products=User::find($userid)->cart;
        foreach ($products as $product) {
            $cart=DB::table('carts')->whereUserId($userid)->whereProductId($product->id)->select('amount')->get()->first();
            $product->amount_cart = $cart->amount;

            $brand = ProductGroup::find($product->pg_id)->brand;
            $product->brand = $brand;

            $image = ProductGroup::find($product->pg_id)->images
                ->where('color_id', '=', $product->color_id)
                ->first();
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

            $discount = DB::table('discount_details', 'dd')
                ->join('discounts as d', 'd.id', '=', 'dd.discount_id')
                ->where('dd.product_id', '=', $product->id)
                ->where('d.type', '=', 0)
                ->where('d.valid_until', '>=', now())
                ->orderBy('d.created_at', 'desc')
                ->select('d.*', 'dd.product_id')
                ->limit(1)
                ->get()
                ->first();
            $product->discount = $discount;
        }
        $arr = [
            'status'  => true,
            'message' => "Danh sách sản phẩm",
            'data'    => $products,
        ];
        return response()->json($arr, 200);
    }
    public function count($userid): \Illuminate\Http\JsonResponse
    {
        $cart=Cart::whereUserId($userid)->count();

        $arr = [
            'status'  => true,
            'message' => "Danh sách sản phẩm",
            'data'    => $cart,
        ];
        return response()->json($arr, 200);
    }
    public function add(Request $request){
//        $carts=Cart::find($request->user_id)
        $cart = [
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'amount' => 1,
        ];

        $res=Cart::create($cart);
        $arr = [
            'status'  => true,
            'message' => "Thêm vào giỏ hàng",
            'data'    => $res,
        ];
        return response()->json($arr, 200);
    }
}
