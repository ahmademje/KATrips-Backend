<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\dataTiket;
use App\dataStasiun;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard.cariTiket');
    }

    function cariTiket(Request $request){
        //$lokasi_berangkat = dataStasiun::where('stasiun_nama', $request->input('lokasi_berangkat'))->get('id');
        //$lokasi_tiba = dataStasiun::where('stasiun_nama', $request->input('lokasi_tiba'))->get('id');

        $lokasi_berangkat = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_berangkat'))->first();
        $lokasi_tiba = dataStasiun::select('id')->where('stasiun_nama', $request->input('lokasi_tiba'))->first();
        $requestTanggal = date("Y-m-d", strtotime($request->tanggal));

        $condition = [
            'lokasi_berangkat' => $lokasi_berangkat->id,
            'lokasi_tiba' => $lokasi_tiba->id,  
        ];
       
        // --Using ORM--
        $idFindedTikets = dataTiket::where($condition)
            ->where($condition)
            ->where(DB::raw("(DATE_FORMAT(waktu_berangkat,'%Y-%m-%d'))"), '=', $requestTanggal)
            ->get('id');
        

        // --Using Query Builder--
        /*$findedTiket = DB::table('data_tikets')
            ->select('id','waktu_berangkat')
            ->where('lokasi_berangkat', '=', $lokasi_berangkat->id)
            ->where('lokasi_tiba', '=', $lokasi_tiba->id)
            ->where(DB::raw("(DATE_FORMAT(waktu_berangkat,'%Y-%m-%d'))"), "=", $requestTanggal)
            ->get();*/
        $i = 0;
        foreach ($idFindedTikets as $idFindedTiket) {
            $findedTikets[$i++] = dataTiket::find($idFindedTiket->id)->getTiket();
            // $dataTiket = dataTiket::find($findedTiket['id'])->getTiket();
            // $findedTiket['status_tiket'] = $findedTiket['status_tiket_id'];
            // $findedTiket['status_tiket'] = $dataTiket['status_tiket'];
            // unset($findedTiket['status_tiket_id']);
            // $findedTiket['lokasi_berangkat'] = $dataTiket['lokasi_berangkat'];
            // $findedTiket['lokasi_tiba'] = $dataTiket['lokasi_tiba'];
            // $findedTiket['kereta'] = $dataTiket['kereta'];
            // $findedTiket['kelas'] = $dataTiket['kelas'];
            // unset($findedTiket['data_kereta_kelas_id']);
            // unset($findedTiket['admin_id']);
        }   
        //dd($findedTikets);
        return view('dashboard.pilihTiket', ['findedTikets'=>$findedTikets, 'request'=>$request]);
    }
}
