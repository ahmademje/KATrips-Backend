<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\dataPemesanan;
use App\dataUser;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
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
     * @param  \App\dataPemesanan  $dataPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::id();

        $findedData = dataPemesanan::where('user_id', $id)->get();
        return response()->json($findedData);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataPemesanan  $dataPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(dataPemesanan $dataPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataPemesanan  $dataPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataPemesanan $dataPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataPemesanan  $dataPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataPemesanan $dataPemesanan)
    {
        //
    }
}
