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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function cart($userid): \Illuminate\Http\JsonResponse
    {
        $cart = DB::table('carts')->whereUserId($userid)->orderBy('updated_at', 'desc')->get();
        $products = User::find($userid)->cart;
        foreach ($products as $product) {
            $cart = DB::table('carts')->whereUserId($userid)->whereProductId($product->id)->select('amount')->get()->first();
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
        $cart = Cart::whereUserId($userid)->sum('amount');

        $arr = [
            'status'  => true,
            'message' => "Danh sách sản phẩm",
            'data'    => $cart,
        ];
        return response()->json($arr, 200);
    }

    public function add(Request $request)
    {
        $carts = Cart::whereUserId($request->user_id)->whereProductId($request->product_id)->get();
        if (count($carts) === 0) {
            $cart = [
                'user_id'    => $request->user_id,
                'product_id' => $request->product_id,
                'amount'     => 1,
            ];
            $res = Cart::create($cart);
        } else {
            $res = Cart::whereUserId($request->user_id)->whereProductId($request->product_id)
                ->update(['amount' => DB::raw('amount+1')]);
        }
        $arr = [
            'status'  => true,
            'message' => "Them thanh cong",
            'data'    => ($res),
        ];
        return response()->json($arr, 200);
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function updateAmount(Request $request)
    {
        $request->amount === '0' ?
            $res = Cart::whereUserId($request->user_id)->whereProductId($request->product_id)
                ->delete()
            : $res = Cart::whereUserId($request->user_id)->whereProductId($request->product_id)
            ->update(['amount' => $request->amount]);

        $arr = [
            'status'  => true,
            'message' => "Update so luong thanh cong",
            'data'    => ($res),
        ];
        return response()->json($arr, 200);
    }
}
