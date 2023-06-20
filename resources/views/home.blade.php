@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="{{ asset('sepuluh/images/bebek.jpg') }}" alt="">
        <div class="col-md-8">
            <h3 style="text-align: center">Selamat {{ Auth::user()->name }} anda berhasil melakukan registrasi</h3>
            <h5 style="text-align: center">Silakan Logout & login kembali untuk masuk ke dashboard admin</h5>
            <h6 style="text-align: center">Jangan Lupa Bernafas yaaa :0</h6>
            <h1 style="text-align: center">SEMANGAT</h1>
        </div>
    </div>
</div>
@endsection
