<?php

namespace App\Http\Controllers;

use App\dataKereta;
use Illuminate\Http\Request;

class DataKeretaController extends Controller
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
        $validator = Validator :: make($request->all(),[
            'id'=>'required | numeric',
            'kereta_nama'=>'required | string',
            'created_at'=>'required | string',
            'updated_at'=>'required | string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        $dataKereta = dataKereta :: create([
            'id'=>$request->id,
            'kereta_nama'=>$request->kereta_nama,
            'created_at'=>$request->created_at,
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
     * @param  \App\dataKereta  $dataKereta
     * @return \Illuminate\Http\Response
     */
    public function show(dataKereta $dataKereta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataKereta  $dataKereta
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKereta $dataKereta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataKereta  $dataKereta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKereta $dataKereta)
    {
        $validator = Validator :: make($request -> all(),[
        
        'id'=>'required|numeric',
        'kereta_nama'=>'required|string',
        'created_at'=>'required|string',
        'update_at'=>'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(),400);
        }

        $updated = dataKereta :: where('id',$dataKereta->id)
        ->update([
            'id'=>$request->id,
            'kereta_nama'=>$request->kereta_nama,
            'created_at'=>$request->create_at,
            'update_at'=>$request->update_at,
        ]);
        
        if ($updated) {
            return response()->json([
                'success' => true,
                'message' => 'dataKereta data updated succesfully'
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataKereta data cannot be updated'
            ],500);
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataKereta  $dataKereta
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKereta $dataKereta)
    {
        $data = dataKereta :: find ($dataKereta -> id );

        if(!$data){
            return response()->json([
                'success' => false,
                'message' => 'dataKereta data not found'
            ],400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true, 
                'message' => 'dataKereta successfully deleted'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataKereta cannot be deleted'
            ], 500);
        }
        
    }
}
