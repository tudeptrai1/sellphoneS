<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\ProductGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $color = Color::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách màu",
            'data'=>$color,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request){
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get(env('BASE_URL').'/api/color');

        }
        else{
            $response = $https->get(env('BASE_URL').'/api/color/'.$q);

        }
        $a = json_decode($response->getBody(),true);
        $result =$this->paginate($a['data'],10);
        $result->appends(['search' => $q]);

        return view('admin.color.index',[
            'data'=>$result,
        ]);


    }
    public function search($name){
        $color = Color::where('name', 'like', '%' . $name . '%')->get();

        if (is_null($color)) {
            $arr = [
                'status' => false,
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'data'=> $color,

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
        return view('admin.color.create');
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
        ]);

        if($validator->fails()){

            return $this->create()->withErrors($validator);

        }

        Color::create($input);

        return redirect()->route('color')->with('message','Tạo mới thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Color $id)
    {
        return view('admin.color.update',
            ['color'=>$id,]
           );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' =>[
                'required',
                'string',
            ],
        ]);

        if($validator->fails()){

            return view('admin.color.update',[
                'color' => $id,
            ])->withErrors($validator);

        }

        Color::where('id',$id['id'])->update($request->except(
            ['_token']));

        return redirect()->route('color')->with('message','Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Color $id)
    {
        Color::findOrFail($id->id)->delete();
        return back()->with('message','Delete Successfully');
    }
}
