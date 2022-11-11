<?php

namespace App\Http\Controllers;

use App\Models\TechSpec;
use Illuminate\Http\Request;

class TechSpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $tech_spec = TechSpec::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách màu",
            'data'=>$tech_spec,

        ];
        return response()->json($arr, 200);
    }
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
     * @param  \App\Models\TechSpec  $techSpec
     * @return \Illuminate\Http\Response
     */
    public function show(TechSpec $techSpec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechSpec  $techSpec
     * @return \Illuminate\Http\Response
     */
    public function edit(TechSpec $techSpec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TechSpec  $techSpec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechSpec $techSpec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechSpec  $techSpec
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechSpec $techSpec)
    {
        //
    }
}
