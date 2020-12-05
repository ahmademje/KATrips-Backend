<?php

namespace App\Http\Controllers\Api;

use App\dataTiket;
use App\dataStasiun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikets = dataTiket::all();
        if($tikets != null){
            return response()->json([
                'success' => true,
                'Tiket' => $tikets,
                'message' => 'Semua Tiket Berhasil Didapat',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Tidak ditemukan Tiket',
            ], 200);
        }
        
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
        $request->validate([
            'waktu_berangkat' => 'required',
            'waktu_tiba' => 'required',
            'gerbong_kode' => 'required',
            'no_kursi' => 'required',
            'harga' => 'required',
            'keretakelas_id' => 'required',
            'admin_id' => 'required',
            'status_id' => 'required',
            'lokasi_berangkat' => 'required',
            'lokasi_tiba' => 'required'
        ]);

        dataTiket::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan Tiket',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dataTiket  $dataTiket
     * @return \Illuminate\Http\Response
     */
    public function show(dataTiket $dataTiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataTiket  $dataTiket
     * @return \Illuminate\Http\Response
     */
    public function edit(dataTiket $dataTiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataTiket  $dataTiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,dataTiket $dataTiket)
    {                
        $validatedReq = $request->validate([
            'waktu_berangkat' => 'required',
            'waktu_tiba' => 'required',
            'gerbong_kode' => 'required',
            'no_kursi' => 'required',
            'harga' => 'required',
            'keretakelas_id' => 'required',
            'admin_id' => 'required',
            'status_id' => 'required',
            'lokasi_berangkat' => 'required',
            'lokasi_tiba' => 'required'
        ]);
        
        if($validatedReq){
            $dataTiket->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Berhasil merubah Tiket',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal merubah Tiket',
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataTiket  $dataTiket
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataTiket $dataTiket)
    {
        if($dataTiket != null){
            dataTiket::destroy($dataTiket->id);
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menghapus Tiket',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Barang Tidak ditemukan',
            ], 200);
        }

        
    }

    public function cariTiket(Request $request){
        $lokasi_berangkat = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_berangkat'))->first();
        $lokasi_tiba = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_tiba'))->first();
        $tglBerangkat = date("Y-m-d", strtotime($request->tanggal_berangkat));

        $condition = [
            'lokasi_berangkat' => $lokasi_berangkat->id,
            'lokasi_tiba' => $lokasi_tiba->id
        ];

        $idFindedTikets = dataTiket::where($condition)
                            ->where(DB::raw("(DATE_FORMAT(waktu_berangkat, '%Y-%m-%d'))"), '=', $tglBerangkat)
                            ->get('id');

        $i = 0;
        foreach($idFindedTikets as $idFindedTiket){
            $findedTikets[$i++] = dataTiket::find($idFindedTiket->id)->getTiket();
        }
        
        return response()->json([
            'message' => 'Finded Tiket',
            'tikets' => $findedTikets
        ], 200);
    }
}
