<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use App\Models\TechSpecDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $pg = ProductGroup::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách nhóm sản phẩm",
            'data'=>$pg,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request){
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get(env('BASE_URL').'/api/pg');
        }
        else{
            $response = $https->get(env('BASE_URL').'/api/pg/'.$q);

        }

        $a = json_decode($response->getBody(),true);
        $result =$this->paginate($a['data'],10);
        $result->appends(['search' => $q]);

        return view('admin.pg.index',[
            'data'=>$result,
        ]);


    }
    public function search($name){
        $pg = ProductGroup::where('name', 'like', '%' . $name . '%')->get();

        if (is_null($pg)) {
            $arr = [
                'status' => false,
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'data'=> $pg,

        ];
        return response()->json($arr, 201);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $brand = Brand::where('status', 'on')->get();
        $brand_off = Brand::where('status', 'off')->get();
        return view('admin.pg.create',
        ['data'=>$brand,
         'disabled' =>$brand_off,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' =>[
                'required',
                'string',
            ],
            'brand_id'=>[
                'required',
            ]
        ]);

        if($validator->fails()){

            return $this->create()->withErrors($validator);

        }

         ProductGroup::create($input);

        return redirect()->route('pg')->with('message','Tạo mới thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(ProductGroup $id)
    {   $temp = $id->tech_spec;
        $tech_all = TechSpec::all();
        $brand = Brand::where('status', 'on')->get();
        $color= Color::all();

        foreach($temp as $tech){
            $tech_spec[$tech->TechSpec->name]=$tech->value;
        }

        return view('admin.pg.update',

            ['brand'=>$brand,
                'pg'=>$id,
                'tech_spec'=>$tech_all,
                'ts'=>$tech_spec,
                'color'=>$color,
            ]);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, ProductGroup $id)
    {
        dd($request->all());
        $temp = $id->tech_spec;
        $input = $request->all();
        $tech_all = TechSpec::all();
        $brand = Brand::where('status', 'on')->get();
        $color= Color::all();
        $validator = Validator::make($input, [
            'name' =>[
                'required',
                'string',
            ],
            'brand_id' =>[
                'required',
            ]
        ]);

        if($validator->fails()){
            foreach($temp as $tech){
                $tech_spec[$tech->TechSpec->name]=$tech->value;
            }
            return view('admin.pg.update',[
                'brand'=>$brand,
                'pg'=>$id,
                'tech_spec'=>$tech_all,
                'ts'=>$tech_spec,
                'color'=>$color,
            ])->withErrors($validator);

        }

//        foreach ($request->tech as $i) {
//            if ($i !== null) {
//                $tech_insert[] = [
//                    'tech_id' => $i['id'],
//                    'pg_id'   => $id->id,
//                    'value'   => $i,
//                ];
//            }
//        }
//        dd($tech_insert);
//        foreach ($tech_insert as $t) {
//            TechSpecDetail::create($t);
//        }
        foreach ($color as $each) {
            if ($request->hasfile($each->id . '_image')) {
                $uploadPath = 'uploads/products/' . $each->name . '_' . $a->name;
                foreach ($request->file($each->id . '_image') as $imagefile) {
                    $x = 1;
                    $extention = $imagefile->getClientOriginalExtension();
                    $filename = $a->name . '_' . $x . '.' . $extention;
                    $imagefile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath . '/' . $filename;
                    Image::create([
                        'pg_id'    => $a->id,
                        'color_id' => $each->id,
                        'image'    => $finalImagePathName,
                    ]);
                    $x++;
                }
            }
        }
        ProductGroup::where('id',$id['id'])->update([
            'name'=>$request->get('name'),
            'brand_id'=>$request->get('brand_id'),

        ]);

        return redirect()->route('pg')->with('message','Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ProductGroup $id)
    {

       ProductGroup::where('id', $id->id)->delete();
        return back()->with('message','Delete Successfully');
    }
}
