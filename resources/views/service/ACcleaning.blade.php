@extends('layouts.master')

@section('title', 'AC Cleaning and Service')

@section('content')
@extends('layouts.header')

<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h1 class="fw-bold display-3 mb-4">
                AC Cleaning & Service<br>
                <span style="color:#247cff;">AC Bersih, Udara Sehat</span>
            </h1>
            <p class="fs-5 mb-4">
                Layanan pembersihan dan perawatan AC profesional untuk menjaga udara di rumah Anda tetap segar dan sehat.<br>
                Perawatan rutin AC membantu mencegah kerusakan dan memperpanjang usia pakai AC Anda.
            </p>
        </div>
        <!-- Kolom Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/ac.jpg') }}" alt="AC Cleaning and Service" class="img-fluid rounded shadow" style="max-width:100%; margin-top:20px;">
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Ketentuan Pengerjaan AC Cleaning & Service</h2>
    <ul>
        <li>Pengerjaan AC cleaning & service dilakukan secara fokus dan tidak bersamaan dengan pengerjaan layanan lain agar hasil pembersihan lebih maksimal.</li>
        <li>Pembersihan dan perawatan AC dilakukan menggunakan cairan pembersih dan alat standar yang disediakan oleh tim AC cleaning & service.</li>
        <li>Sebelum pengerjaan dimulai, pelanggan disarankan untuk memberikan informasi mengenai kondisi AC dan keluhan yang dialami, agar tim dapat menyiapkan peralatan dan solusi yang sesuai.</li>
        <li>Layanan mencakup pembersihan filter, evaporator, blower, serta pengecekan fungsi dasar AC.</li>
        <li>Jumlah teknisi disesuaikan dengan jumlah unit AC dan tingkat kesulitan pengerjaan, dengan rincian sebagai berikut:
            <ul>
                <li>Paket Small: 1 unit AC (1 teknisi)</li>
                <li>Paket Medium: 2–3 unit AC (2 teknisi)</li>
                <li>Paket Large: 4–6 unit AC (3 teknisi)</li>
                <li>Paket Extra: &gt;6 unit AC (4 teknisi atau lebih, sesuai kebutuhan)</li>
            </ul>
        </li>
        <li>Pelanggan diharapkan memastikan akses listrik, air, dan area kerja tersedia sebelum pengerjaan dimulai.</li>
        <li>Tim AC cleaning & service tidak bertanggung jawab atas kerusakan pada unit AC yang tidak diinformasikan sebelumnya memiliki kondisi rusak atau bermasalah.</li>
        <li>Jam operasional AC cleaning & service berlangsung setiap hari pukul 08.00–19.00 WIB.</li>
    </ul>
</div>


<div class="container my-5">
    <h2 class="text-center fw-bold mb-5" style="font-size:2.5rem;">Kenapa Pilih OClean</h2>
    <div class="row text-center justify-content-center">
        <div class="col-6 col-md-2 mb-4">
            <img src="{{ asset('images/security.png') }}" alt="Terpercaya" style="height:64px;">
            <div class="mt-3 fs-5">Terpercaya</div>
        </div>
        <div class="col-6 col-md-2 mb-4">
            <img src="{{ asset('images/quality.png') }}" alt="Berkualitas" style="height:64px;">
            <div class="mt-3 fs-5">Berkualitas</div>
        </div>
        <div class="col-6 col-md-2 mb-4">
            <img src="{{ asset('images/fast.png') }}" alt="Cepat" style="height:64px;">
            <div class="mt-3 fs-5">Cepat</div>
        </div>
        <div class="col-6 col-md-2 mb-4">
            <img src="{{ asset('images/flexible.png') }}" alt="Fleksibel" style="height:64px;">
            <div class="mt-3 fs-5">Fleksibel</div>
        </div>
        <div class="col-6 col-md-2 mb-4">
            <img src="{{ asset('images/profesional.png') }}" alt="Professional" style="height:64px;">
            <div class="mt-3 fs-5">Professional</div>
        </div>
    </div>
</div>

{{-- sertakan form pesanan, kirim nama layanan --}}
@include('partials.order-form', ['service' => 'AC Cleaning & Service'])

@endsection