<?php

namespace App\Http\Controllers;

use App\dataBayi;
use Illuminate\Http\Request;

class DataBayiController extends Controller
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
        $validator = Validator :: make($request -> all(),[
        
            'id'=>'required|numeric',
            'nama_nik'=>'required|string',
            'no_nik'=>'required|string',
            'tgl_lahir'=>'required|string',
            'created_at'=>'required|string',
            'update_at'=>'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        $dataBayi = dataBayi :: create([
            'id'=>$request->id,
            'nama_nik'=>$request->nama_nik,
            'no_nik'=>$request->no_nik,
            'tgl_lahir'=>$request->tgl_lahir, 
            'create_at'=>$request->create_at,
            'update_at'=>$request->update_at,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'New dataKelas has successfully created',
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dataBayi  $dataBayi
     * @return \Illuminate\Http\Response
     */
    public function show(dataBayi $dataBayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataBayi  $dataBayi
     * @return \Illuminate\Http\Response
     */
    public function edit(dataBayi $dataBayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataBayi  $dataBayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataBayi $dataBayi)
    {
        $validator = Validator :: make($request -> all(),[
            'id'=>'required|numeric',
            'nama_nik'=>'required|string',
            'no_nik'=>'required|string',
            'tgl_lahir'=>'required|string',
            'created_at'=>'required|string',
            'update_at'=>'required|string',
        
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(),400);
        }

        $updated = dataBayi :: where('id',$dataBayi->id)
        ->update([
            'id'=>$request->id,
            'nama_nik'=>$request->nama_nik,
            'no_nik'=>$request->no_nik,
            'tgl_lahir'=>$request->tgl_lahir, 
            'create_at'=>$request->create_at,
            'update_at'=>$request->update_at,
        ]);

        if ($updated) {
            return response()->json([
                'success' => true,
                'message' => 'dataBayi data updated succesfully'
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataBayi data cannot be updated'
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataBayi  $dataBayi
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataBayi $dataBayi)
    {
        $data = dataBayi :: find ($dataBayi -> id);

        if(!$data){
            return response()->json([
                'success' => false,
                'message' => 'dataBayi data not found'
            ],400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true, 
                'message' => 'dataBayi successfully deleted'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataBayi cannot be deleted'
            ], 500);
        }
    }
}
