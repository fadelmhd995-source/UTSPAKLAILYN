@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
@extends('layouts.header')

<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h1 class="fw-bold display-3 mb-4">
                Pembersihan<br>
                <span style="color:#247cff;">Tanpa Ribet</span><br>
                Hemat Waktu<br>
                Hidup Jadi Mudah
            </h1>
            <p class="fs-5 mb-4">
                Jangan biarkan waktu berharga Anda terbuang,<br>
                Biarkan kami yang mengurus segalanya untuk Anda.
            </p>
        </div>
        <!-- Kolom Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/cleaning-service.jpg') }}" alt="Cleaning Service" class="img-fluid rounded shadow" style="max-width:100%; margin-top:20px;">
        </div>
    </div>
    {{-- Fitur Keunggulan --}}
    <div class="row align-items-end mt-5 mb-2" style="gap:0;">
        <div class="col-6 col-sm-2 mb-2 text-start">
            <img src="{{ asset('images/security.png') }}" alt="Terpercaya" style="height:40px;">
            <div class="mt-2 fw-semibold">Terpercaya</div>
        </div>
        <div class="col-6 col-sm-2 mb-2 text-start">
            <img src="{{ asset('images/quality.png') }}" alt="Berkualitas" style="height:40px;">
            <div class="mt-2 fw-semibold">Berkualitas</div>
        </div>
        <div class="col-6 col-sm-2 mb-2 text-start">
            <img src="{{ asset('images/fast.png') }}" alt="Cepat" style="height:40px;">
            <div class="mt-2 fw-semibold">Cepat</div>
        </div>
        <div class="col-6 col-sm-2 mb-2 text-start">
            <img src="{{ asset('images/flexible.png') }}" alt="Fleksibel" style="height:40px;">
            <div class="mt-2 fw-semibold">Fleksibel</div>
        </div>
        <div class="col-6 col-sm-2 mb-2 text-start">
            <img src="{{ asset('images/profesional.png') }}" alt="Professional" style="height:40px;">
            <div class="mt-2 fw-semibold">Professional</div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="text-center fw-bold mb-5" style="font-size:2.8rem;">Kenapa Harus Oclean</h1>
    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="p-4 h-100 rounded-4" style="background:#3bb6c5; color:white;">
                <h3 class="fw-bold mb-3">Tersebar Luas di Indonesia</h3>
                <p>Hadir di <b>Jakarta, Tangerang, Depok, Bekasi, Bogor, Bandung, Medan, Surabaya</b> dan <b>Denpasar</b>.</p>
                <img src="{{ asset('images/oclean-lokasi.png') }}" alt="" class="img-fluid mt-3" style="max-height:100px;">
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4 h-100 rounded-4" style="background:#ff9800; color:white;">
                <h3 class="fw-bold mb-3">Bisa Pilih Helper Sesuka Kamu</h3>
                <p><b>Langganan Prepaid</b>, kamu bisa <b>pilih helper favorit</b> kamu. Hati tenang rumah bersih!</p>
                <img src="{{ asset('images/oclean-helper.png') }}" alt="" class="img-fluid mt-3" style="max-height:100px;">
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4 h-100 rounded-4" style="background:#3ec6a8; color:white;">
                <h3 class="fw-bold mb-3">Privasi Kamu Aman!</h3>
                <p>Chat dan komunikasi hanya di aplikasi, aman no tipu-tipu!</p>
                <img src="{{ asset('images/oclean-privasi.png') }}" alt="" class="img-fluid mt-3" style="max-height:100px;">
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4 h-100 rounded-4" style="background:#00294d; color:white;">
                <h3 class="fw-bold mb-3">Bayar Pake Apa Aja Bisa!</h3>
                <p>Metode pembayaran favoritmu ada semua, mulai dari <b>dompet digital, virtual account, sampai kartu kredit</b>.</p>
                <img src="{{ asset('images/oclean-bayar.png') }}" alt="" class="img-fluid mt-3" style="max-height:100px;">
            </div>
        </div>
    </div>
</div>
@endsection
