<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'admin', 'middleware' => 'assign.guard:admin'], function(){
    Route::post('login', 'Api\AdminController@login')->name('admin.login');
    Route::post('register', 'Api\AdminController@register');
    Route::group(['middleware' => 'jwt.verify'], function ($router) {        
            Route::post('logout', 'Api\AdminController@logout');
            Route::post('refresh', 'Api\AdminController@refresh');
            Route::get('user-profile', 'Api\AdminController@userProfile');
            Route::get('tiket', 'Api\TiketController@index');
            Route::post('tiket/create', 'Api\TiketController@store');
            Route::put('tiket/{dataTiket}', 'Api\TiketController@update');
            Route::delete('tiket/{dataTiket}', 'Api\TiketController@destroy');
    });
});

Route::group(['middleware' => 'assign.guard:user', 'prefix' => 'user'], function ($router) {
    Route::post('login', 'Api\UserController@login')->name('user.login');
    Route::post('register', 'Api\UserController@register');
    Route::group(['middleware' => 'jwt.verify'], function($router) {
        Route::post('logout', 'Api\UserController@logout');
        Route::post('refresh', 'Api\UserController@refresh');
        Route::get('user-profile', 'Api\UserController@userProfile');
        Route::post('tiket/cari', 'Api\TiketController@cariTiket');
        Route::get('stasiun', 'Api\StasiunController@index');
        Route::get('history-pemesanan', 'DataPemesananController@show');
    });
});
