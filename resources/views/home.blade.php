@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col">
        <h1>Bergabung
            <br>dengan GAS</h1>
            <p>Aplikasi Gas akan membantumu dalam memantau stok <br>
            produk tokomu dan menjangkau customer yang lebih luas</p>
            
            <p>Unduh</p>
            <img src="{{ asset('img/icongp.png') }}" height="40" alt="My Image">
    </div>
    <div class="col">
        <img src="{{ asset('img/people.png') }}" height="540" alt="My Image">
    </div>
</div>



@endsection