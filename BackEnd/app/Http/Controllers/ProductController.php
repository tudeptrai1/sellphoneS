<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Memory;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use App\Models\TechSpecDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $response = $https->get('final3.test/api/product');

        }
        else{
            $response = $https->get('final3.test/api/product/'.$q);

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $color = Color::all();
        $memory = Memory::all();
        $tech_spec = TechSpec::all();
        $data = $request->all();
        $brand = Brand::all();
        $input = Validator::make($data, [
            'name' =>[
                'required',
                'string',
            ],
            'brand' =>[
                'required',
            ],
            'trending'=>[
                'required',
            ],
            'description'=> [
                'required',
            ],
        ]);

        if($request->hasFile('image')){
            dd(1);
        }
        dd(0);
        if($input->fails()){

            return view('admin.product.create',['color' => $color,
                'memory' => $memory,
                'brand' => $brand,
                'tech_spec'=>$tech_spec,
            ])->withErrors($data);

        }



//        foreach($color as $each){
//          }
//                $uploadPath = 'uploads/products/'.$each->name;
//                foreach($request->File('image_'.$each->name) as $imagefile){
//                    $extention = $imagefile->getClientOriginalExtension();
//                    $filename = time().'.'.$extention;
//                    $file = move($uploadPath, $filename);
//                    $finalImagePathName = $uploadPath. '-'.$filename;
//                    $data->PGImage()->create([
//                        'pg_id' =>$a->id,
//                        'color_id'=>$each->id,
//                        'image'=>$finalImagePathName,
//                    ]);
//                }
//            }
//        }
      foreach($memory as $memo) {
            foreach($color as $cl){
                $name[]=$memo->id.'_'.$cl->id;

            }
        }

        // Product Group
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
        //End Product Group
        // Tech Spec
        foreach($tech_spec as $temp){

            $tech[]=$temp->id;

        }
        foreach($tech as $i){
            if($data[$i]!==null){
            $tech_insert[]=[
                'tech_id'=>$i,
                'pg_id'=>$a->id,
                'value'=>$data[$i],
            ];
            }
        }
        foreach($tech_insert as $t){
           TechSpecDetail::create($t);
        }
        //End Tech Spec

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
        return redirect()->route('product')->with('message','Successfully created');
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
     * @param  \App\Models\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
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
