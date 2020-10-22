<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index');
Route::post('/dashboard', 'DashboardController@cariTiket');
Route::get('/pemesanan/{tiket_id}', 'DetailPemesananController@coba')->name('pemesanan');

use App\dataKereta;
use App\dataKelas;
use App\dataKeretaKelas;
use App\dataTiket;
use App\statusTiket;
use App\dataStasiun;
use App\dataBayi;
use App\dataPenumpang;
use App\dataUser;

Route::get('/cek', function(){
   echo $tiket_id;
})->name('cek');

Route::get('/create_dataKeretaKelas', function(){
    $dataKelas = dataKelas::find(1);

    $dataKelas->dataKeretaKelas()->create([
        'data_kereta_id' => 2,
    ]);

    return 'berhasil';
});
