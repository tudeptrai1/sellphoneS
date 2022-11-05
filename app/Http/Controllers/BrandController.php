<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function all()
    {
       $brands = Brand::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách sản phẩm",
            'data'=>$brands,

        ];
        return response()->json($arr, 200);
    }
    public function index(){$https = new \GuzzleHttp\Client;
        $response = $https->get('http://final3.test/api/brand');
        $result = json_decode($response->getBody(), true);

        return view('admin.brand.index',[
            'data'=>$result['data'],
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

        $brand = Brand::create($input);

        return $this->index()->with('message','Successfully created');

    }



    public function show($name) {
        $brands = Brand::where('name', $name)
            ->orWhere('name', 'like', '%' . $name . '%')->get();;
        if (is_null($brands)) {
            $arr = [
                'success' => false,
                'message' => 'Không có nhãn hiệu này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => "Chi tiết nhãn hiệu ",
            'data'=> $brands
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

         Brand::where('id',$id['id'])->update($request->except(
             ['_method',
                 '_token'
             ]));

        return redirect()->route('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
