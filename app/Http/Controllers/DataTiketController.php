<?php

namespace App\Http\Controllers;

use App\dataTiket;
use Illuminate\Http\Request;

class DataTiketController extends Controller
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
        //
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
    public function update(Request $request, dataTiket $dataTiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataTiket  $dataTiket
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataTiket $dataTiket)
    {
        //
    }

    public function cariTiket(Request $request){
        $lokasi_berangkat = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_berangkat'))->first();
        $lokasi_tiba = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_tiba'))->first();
        $tglBerangkat = date("Y-m-d", strtotime($request->tanggal));

        $condition = [
            'lokasi_berangkat' => $lokasi_berangkat->id,
            'lokasi_tiba' => $lokasi_tiba->id
        ];

        $findedTiekts = dataTiket::where($condition)
                            ->where(DB::raw("(DATE_FORMAT(waktu_berangkat, '%Y-%m-%d'))"), '=', $tglBerangkat)
                            ->getTiket();
        
        return response()->json([
            'message' => 'Finded Tiket',
            'tikets' => $findedTiekts
        ], 200);
    }
}
