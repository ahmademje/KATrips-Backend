<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard');
    }

    function cariTiket(Request $request){
        return $request->all();
    }
}
