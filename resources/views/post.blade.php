@extends('layouts/main')

@section('container')
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('img/pptab.png') }}" width="500">       
    </div>
    <div class="col-md-6 mt-5">
        <h5>Daftar Toko</h5>
        <h2><b>Daftarkan<br>
        Tokomu Segera</b></h2>
        <p>Unduh</p>
            <img src="{{ asset('img/icongp.png') }}" height="40" alt="My Image">
    </div>
    <div class="col-md-4">
        <img src="{{ asset('img/ppphone.png') }}" width="500" class="right-image">  
    </div>
    <div class="col-md-6 mt-5">
        <h5>Daftar Toko</h5>
        <h2><b>Download<br>
        Sekarang</b></h2>
        <p>Unduh</p>
            <img src="{{ asset('img/icongp.png') }}" height="40" alt="My Image">
    </div>
@endsection