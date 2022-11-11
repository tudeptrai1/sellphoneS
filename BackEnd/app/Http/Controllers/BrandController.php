<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

class BrandController extends Controller
{
    /**
     * Paginate a laravel colletion or array of items.
     *
     * @param  array|Illuminate\Support\Collection $items   array to paginate
     * @param  int $perPage number of pages
     * @return \Illuminate\Http\JsonResponse    new LengthAwarePaginator instance
     */



    public function all()
    {
       $brands = Brand::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách nhãn hiệu",
            'data'=>$brands,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request){
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get('http://final3.test/api/brand');

        }
        else{
            $response = $https->get('http://final3.test/api/brand/'.$q);

        }
        $a = json_decode($response->getBody(),true);
        $result =$this->paginate($a['data'],10);
        $result->appends(['search' => $q]);

        return view('admin.brand.index',[
            'data'=>$result,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.brand.create');

    }


    public function store(Request $request) {



        $input = $request->all();

        $validator = Validator::make($input, [
            'name' =>[
                'required',
                'string',
            ],
            'slug' =>[
                'required',
                'string'
            ],
            'description'=> [
                'required',
            ],
        ]);

        if($validator->fails()){

            return view('admin.brand.create')->withErrors($validator);

        }

         Brand::create($input);
        return redirect()->route('brand')->with('message','Successfully created');


    }
    public function search($name) {
        $brands = Brand::where('name', 'like', '%' . $name . '%')->get();
        if (count($brands)==0) {
            $arr = [
                'status' => false,
                'data' => [],
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'data'=> $brands,

        ];
        return response()->json($arr, 201);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Brand $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.brand.update',[
            'brand' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Brand $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' =>[
                'required',
                'string',
            ],
            'slug' =>[
                'required',
                'string'
            ],
            'description'=> [
                'required',
            ],
        ]);

        if($validator->fails()){

            return view('admin.brand.update',[
                'brand' => $id,
            ])->withErrors($validator);

        }

        Brand::where('id',$id['id'])->update($request->except(
        ['_method',
            '_token'
        ]));

        return redirect()->route('brand')->with('message','Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Brand $id)
    {
        $deleted = Brand::where('id', $id->id)->delete();
        return back()->with('message','Delete Successfully');
    }

}
