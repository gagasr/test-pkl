@extends('layouts.main')

@section('container')
    <h2 class="mb-3 mt-5 text-center">Tentang Kami</h2>
    <div class="row justify-content-center">
        <div class="col-auto text-center">
            <p>GAS adalah Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas<br>
            Melalui gerakan #AyoBelanjaTokoTetangga<br>
        GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.</p>
        <img src="{{ asset('img/ig.png') }}" height="40" alt="My Image">
        <img src="{{ asset('img/fb.png') }}" height="45" alt="My Image">
        </div>
    </div>
@endsection
