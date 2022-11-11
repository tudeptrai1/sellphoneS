<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $mmr = Memory::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách màu",
            'data'=>$mmr,

        ];
        return response()->json($arr, 200);
    }
    public function index(Request $request){
        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if($q ==null){
            $response = $https->get('http://127.0.0.1:8000/api/memory');

        }
        else{
            $response = $https->get('http://127.0.0.1:8000/api/memory/'.$q);

        }
        $a = json_decode($response->getBody(),true);
        $result =$this->paginate($a['data'],10);
        $result->appends(['search' => $q]);

        return view('admin.memory.index',[
            'data'=>$result,
        ]);


    }
    public function search($name){
        $memory = Memory::where('value', 'like', '%' . $name . '%')->get();

        if (is_null($memory)) {
            $arr = [
                'status' => false,
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'data'=> $memory,

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
        return view('admin.memory.create');
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
            'value' =>[
                'required',
                'integer',
            ],
        ]);

        if($validator->fails()){

            return $this->create()->withErrors($validator);

        }

        Color::create($input);

        return redirect()->route('memory')->with('message','Tạo mới thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memory  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Memory $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memory  $color
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Memory $id)
    {
        return view('admin.memory.update',
            ['memory'=>$id,]
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Memory  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, Memory $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'value' =>[
                'required',
                'string',
            ],
        ]);

        if($validator->fails()){

            return view('admin.memory.update',[
                'memory' => $id,
            ])->withErrors($validator);

        }

        Memory::where('id',$id['id'])->update($request->except(
            ['_token']));

        return redirect()->route('memory')->with('message','Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memory  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Memory $id)
    {
        Memory::where('id', $id->id)->delete();
        return back()->with('message','Delete Successfully');
    }
}

