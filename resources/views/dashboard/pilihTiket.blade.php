@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    {{ Form::open(array('url' => '/dashboard')) }}
        @csrf
        <label for="lokasi_berangkat">Stasiun Awal : </label>
        <input type="text" id="lokasi_berangkat" name="lokasi_berangkat" value="{{ $request->lokasi_berangkat }}">
        <br>
        <label for="lokasi_tiba">Stasiun Tujuan : </label>
        <input type="text" id="lokasi_tiba" name="lokasi_tiba" value="{{ $request->lokasi_tiba }}">
        <br>
        <label for="tanggal">Tanggal :</label>
        <input type="date" id="tanggal" name="tanggal" value="{{ $request->tanggal }}">
        <br>
        <label for="penumpang_dewasa">Penumpang Dewasa : </label>
        <input type="number" id="penumpang_dewasa" min="1" max="10" name="penumpang_dewasa" value="{{ $request->penumpang_dewasa }}">
        <br>       
        <input type="submit" value="Cari">
    {{ Form::close() }}

    <?php foreach ($findedTikets as $findedTiket):?>
        <div class="container">
            <label>Waktu berangkat          : {{ $findedTiket['waktu_berangkat'] }}</label><br>
            <label>Waktu Tiba               : {{ $findedTiket['waktu_tiba'] }}</label><br>
            <label>Gerbong                  : {{ $findedTiket['gerbong_kode'] }}</label><br>
            <label>No Kursi                 : {{ $findedTiket['no_kursi'] }}</label><br>
            <label>Harga                    : {{ $findedTiket['harga'] }}</label><br>
            <label>Stasiun keberangkatan    : {{ $findedTiket['lokasi_berangkat'] }}</label><br>
            <label>Stasiun tiba             : {{ $findedTiket['lokasi_tiba'] }}</label><br>
            <label>Status Tiket             : {{ $findedTiket['status_tiket'] }}</label><br>
            <label>Kereta                   : {{ $findedTiket['kereta'] }}</label><br>
            <label>Kelas                    : {{ $findedTiket['kelas'] }}</label><br>
            <!-- isok nggawe form ben POST -->
            <a href="{{route('pemesanan', $findedTiket['tiket_id'])}}"><button type="submit">Beli Tiket</button></a> 
        </div>           
    <?php endforeach; ?>
    

@endsection