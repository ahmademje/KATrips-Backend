<?php

namespace App\Http\Controllers\Api;

use App\dataTiket;
use App\dataBayi;
use App\dataStasiun;
use App\Perjalanan;
use App\dataPenumpang;
use App\dataPemesanan;
use App\detailPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'gerbong_kode' => 'required',
            'no_kursi' => 'required',
            'perjalanan_id' => 'required',
            'admin_id' => 'required',
            'status_id' => 'required',
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
            'gerbong_kode' => 'required',
            'no_kursi' => 'required',
            'perjalanan_id' => 'required',
            'admin_id' => 'required',
            'status_id' => 'required',
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

    public function cariTiket(Perjalanan $perjalanan){
        $idTikets = $perjalanan->dataTiket()->get('id');

        if($idTikets->count() != 0){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Mendapatkan Semua Tiket',
                'tikets' => $idTikets
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Mendapatkan Semua Tiket',
            ], 401);
        }
    }

    public function pesanTiket(Request $request){
        $apiRequest = json_decode($request->getContent());
        
        /*
            Needed Parameter =data Penumpang (id_perjalanan, nama_ktp, no_ktp, is_dewasa)
            {
                "id_perjalanan": 3,
                "penumpangs": [
                    {
                        "nama_ktp": "ahmad",
                        "no_ktp": 11111112,
                        "is_dewasa": true
                    },
                    {
                        "nama_ktp": "maulana",
                        "no_ktp": 22222222,
                        "is_dewasa": false
                    }
                ]
            }  
        */

        $total_harga = 0;
        $jmlhPenumpangDws = 0;
        $jmlhPenumpangBayi = 0;
        $dewasaAssigned = false;
        $bayiAssigned = false;
        foreach($apiRequest->penumpangs as $penumpang)
            {
                $total_harga += Perjalanan::where('id', '=', $apiRequest->id_perjalanan)->value('harga');

                if($penumpang->is_dewasa){     
                    $dewasaAssigned = true;          
                    $dataPenumpang = new dataPenumpang;
                    $dataPenumpang->nama_ktp = $penumpang->nama_ktp;
                    $dataPenumpang->no_ktp = $penumpang->no_ktp;
                    if($bayiAssigned) $dataPenumpang->bayi_id = $penumpangBayi[0]->id;
                    else $dataPenumpang->bayi_id = null;
                    $dataPenumpang->user_id =  auth()->user()->value('id');
                    $dataPenumpang->save();
                    $penumpangDws[$jmlhPenumpangDws++] = $dataPenumpang;
                }else{
                    $bayiAssigned = true;
                    $dataBayi = new dataBayi;
                    $dataBayi->nama_nik = $penumpang->nama_ktp;
                    $dataBayi->no_nik = $penumpang->no_ktp;
                    $dataBayi->tgl_lahir = date("Y-m-d");
                    $dataBayi->save();
                    if($dewasaAssigned) $penumpangDws[0]->bayi_id = $dataBayi->id;
                   $penumpangBayi[$jmlhPenumpangBayi++] = $dataBayi;
                }
            }

        if(!($bayiAssigned) && $jmlhPenumpangBayi!=0) $dataPenumpang[0]->bayi_id = $penumpangBayi[0]->id;

        $dataPemesanan = new dataPemesanan;
        $dataPemesanan->waktu_pesan = date("Y-m-d");
        $dataPemesanan->invoicecetak_no = 1234567;
        $dataPemesanan->total_harga = $total_harga;
        $dataPemesanan->kodepembayaran_id = 1;
        $dataPemesanan->pembayaranstatus_id = 2;
        $dataPemesanan->user_id = auth()->user()->value('id');
        $dataPemesanan->save();

        for($i = 0; $i<$jmlhPenumpangDws; $i++){
            $detailPemesanan = new detailPemesanan;
            $detailPemesanan->penumpang_id = $penumpangDws[$i]->id;
            $detailPemesanan->tiket_id = $this->getAndUpdateTiketStatus($apiRequest->id_perjalanan);
            $detailPemesanan->pemesanan_id = $dataPemesanan->id;
            $detailPemesanan->save();
        }
        
        if($dataPemesanan && $dataPenumpang && $detailPemesanan){
            return response()->json([
                'invoice' => $dataPemesanan->invoicecetak_no,
                'isSuccess' => true,
                'message' => 'Berhasil Memesan Tiket',
            ], 200);
        }else{
            return response()->json([
                'isSuccess' => false,
                'message' => 'Gagal Memesan Tiket',
            ], 401);
        }        
    }

    private function getAndUpdateTiketStatus(int $idPerjalanan){
        $tiket = Perjalanan::find($idPerjalanan)
                            ->dataTiket()
                            ->where('status_id', '=', 1)
                            ->first();
        $tiket->status_id = 2;
        $tiket->save();

        return $tiket['id'];
    }
}
