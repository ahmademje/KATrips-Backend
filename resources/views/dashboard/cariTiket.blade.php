@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    {{ Form::open(array('url' => '/dashboard')) }}
        @csrf
        <label for="lokasi_berangkat">Stasiun Awal : </label>
        <input type="text" id="lokasi_berangkat" name="lokasi_berangkat">
        <br>
        <label for="lokasi_tiba">Stasiun Tujuan : </label>
        <input type="text" id="lokasi_tiba" name="lokasi_tiba">
        <br>
        <label for="tanggal">Tanggal :</label>
        <input type="date" id="tanggal" name="tanggal">
        <br>
        <label for="penumpang_dewasa">Penumpang Dewasa : </label>
        <input type="number" id="penumpang_dewasa" min="1" max="10" name="penumpang_dewasa">
        <br>       
        <input type="submit" value="Cari">
    {{ Form::close() }}

    

@endsection