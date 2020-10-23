<?php

namespace App\Http\Controllers;

use App\dataKelas;
use Illuminate\Http\Request;

class DataKelasController extends Controller
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
    
    // iki penting  
     public function store(Request $request)
    {
        $validator = Validator :: make($request->all(),[
            'id'=>'required|numeric',
            'kelas_nama'=>'required|string',
            'create_at'=>'required|string',
            'update_at'=>'required|string'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        $dataKelas = dataKelas::create([
            'id'=>$request->id,
            'kelas_nama'=>$request->kelas_nama,
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
     * @param  \App\dataKelas  $dataKelas
     * @return \Illuminate\Http\Response
     */
    
     //iki  penting 
     public function show(dataKelas $dataKelas)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataKelas  $dataKelas
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKelas $dataKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataKelas  $dataKelas
     * @return \Illuminate\Http\Response
     */
    
    // iki penting
     public function update(Request $request, dataKelas $dataKelas)
    {
        $validator = Validator :: make($request->all(),[
            'id'=>'required|numeric',
            'kelas_nama'=>'required|string',
            'create_at'=>'required|string',
            'update_at'=>'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(),400);
        }

        $updated = dataKelas::where('id',$dataKelas->id)
        ->update([
            'id'=>$request->id,
            'kelas_nama'=>$request->kelas_nama,
            'create_at'=>$request->create_at,
            'update_at'=>$request->update_at,
        ]);

        if ($updated) {
            return response()->json([
                'success' => true,
                'message' => 'dataKelas data updated succesfully'
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataKelas data cannot be updated'
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataKelas  $dataKelas
     * @return \Illuminate\Http\Response
     */
    
    // iki penting 
     public function destroy(dataKelas $dataKelas)
    {
        $data = dataKelas :: find ($dataKelas-> id);

        if(!$data){
            return response()->json([
                'success' => false,
                'message' => 'dataKelas data not found'
            ],400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true, 
                'message' => 'dataKelas successfully deleted'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataKelas cannot be deleted'
            ], 500);
        }
    }
}
