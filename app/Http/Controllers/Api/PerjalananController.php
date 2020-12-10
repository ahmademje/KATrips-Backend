<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\dataStasiun;
use App\Perjalanan;
use DB;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function cariPerjalanan(Request $request){
        $lokasi_berangkat = dataStasiun::select('id')->where('id', $request->input('lokasi_berangkat_id'))->first();
        $lokasi_tiba = dataStasiun::select('id')->where('id', $request->input('lokasi_tiba_id'))->first();
        $tglBerangkat = date("Y-m-d", strtotime($request->tanggal_berangkat));

        $condition = [
            'lokasi_berangkat_id' => $lokasi_berangkat->id,
            'lokasi_tiba_id' => $lokasi_tiba->id
        ];

        $perjalanans = Perjalanan::where($condition)
                            ->where(DB::raw("(DATE_FORMAT(waktu_berangkat, '%Y-%m-%d'))"), '=', $tglBerangkat)
                            ->get();
        
        if($perjalanans->count() != 0){
            return response()->json([
                'success' => true,
                'message' => 'Perjalanan Ditemukan',
                'Perjalanan' => $perjalanans
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Perjalana Tidak Ditemukan',
            ], 401);
        }
    }
}
