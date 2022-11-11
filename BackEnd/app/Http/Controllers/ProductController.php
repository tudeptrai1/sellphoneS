<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Memory;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(): \Illuminate\Http\JsonResponse
    {
        $product = Product::all();
        $color = Color::all();
        $pgroup = ProductGroup::all();
        $memory = Memory::all();
//        foreach ($product as $each){
//
//        }
        $arr = [
            'status' => true,
            'message' => "Danh sách sản phẩm",
            'data'=>$product,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request)
    {
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get('http://final3.test/api/product');

        }
        else{
            $response = $https->get('http://final3.test/api/product/'.$q);

        }
        $a = json_decode($response->getBody(),true);
        $result =$this->paginate($a['data'],10);
        $result->appends(['search' => $q]);
        return view('admin.product.index',[
            'data'=>$result,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $color = Color::all();
        $memory = Memory::all();
        $brand = Brand::all();
        $tech_spec = TechSpec::all();

       return view('admin.product.create',
       ['color' => $color,
        'memory' => $memory,
        'brand' => $brand,
        'tech_spec'=>$tech_spec,
           ]
       );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = Color::all();
        $memory = Memory::all();
        $tech_spec = TechSpec::all();
        $data = $request->all();

        foreach($memory as $memo) {
            foreach($color as $cl){
                $name[]=$memo->id.'_'.$cl->id;

            }
        }

        $product_group = [
            'name' => $request->name,
            'brand_id' => $request->brand,
            'description' => $request->description,
            'trending'=> $request->trending,
        ];
        ProductGroup::create($product_group);
        $a= ProductGroup::latest()->get()->first();
        $status= 0;
        if($request->status === 'on')
            $status =1;

        foreach($name as $i) {
            $temp = null;
            if (isset($data[$i.'_status'])) {
                $temp['name'] = explode("_", $i);
                $temp['price'] = $data[$i.'_price'];
                $temp['amount'] = $data[$i.'_amount'];
                $temp['product_name'] = ProductGroup::where('id',$a->id)->value('name').' '.Memory::where('id',$temp['name'][0])->value('value').'GB '.Color::where('id',$temp['name'][1])->value('name');

                $p_insert[]= [
                    'name' => $temp['product_name'],
                    'pg_id'=>$a->id,
                    'color_id'=>$temp['name'][1],
                    'memory_id'=>$temp['name'][0],
                    'sell_price'=>$temp['price'],
                    'amount'=>$temp['amount'],
                    'status'=>$status,
                ];
            }
        }

        foreach($p_insert as $product){
            Product::create($product);
        }





//            $abc = array_filter($a,function ($v) {return strpos($v, $name) === false; });

//       $arr = array_diff($a, $abc);
//       dd($arr);
//        foreach($arr as $key){
//            foreach($data as $val){
//                $res[$key][]=$val;
//            }
//        }
//        dd($res);
//        dd($arrr);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }
    public function search(Product $product){

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
