<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $img = Image::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách nhãn hiệu",
            'data'=>$img,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request){
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get(env('BASE_URL').'/api/image');

        }
        else{
            $response = $https->get(env('BASE_URL').'/api/image/'.$q);

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
        return view('admin.image.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
