@extends('layouts.master')

@section('title', 'Office Cleaning')

@section('content')
@extends('layouts.header')

<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h1 class="fw-bold display-3 mb-4">
                Office Cleaning<br>
                <span style="color:#247cff;">Kantor Bersih, Produktivitas Meningkat</span>
            </h1>
            <p class="fs-5 mb-4">
                Layanan pembersihan kantor profesional untuk menciptakan lingkungan kerja yang bersih, sehat, dan nyaman.<br>
                Tim kami siap menjaga kebersihan ruang kerja Anda setiap hari.
            </p>
        </div>
        <!-- Kolom Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/office-cleaning.jpg') }}" alt="Office Cleaning" class="img-fluid rounded shadow" style="max-width:100%; margin-top:20px;">
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Ketentuan Pengerjaan Office Cleaning</h2>
    <ul>
        <li>Pengerjaan office cleaning dilakukan secara fokus dan tidak bersamaan dengan pengerjaan layanan lain agar hasil pembersihan lebih maksimal.</li>
        <li>Pembersihan dilakukan menggunakan cairan pembersih dan alat standar yang disediakan oleh tim office cleaning.</li>
        <li>Sebelum pengerjaan dimulai, pelanggan disarankan untuk memberikan informasi mengenai kondisi kantor dan area yang ingin dibersihkan, agar tim dapat menyiapkan peralatan yang sesuai.</li>
        <li>Luas minimal area pengerjaan office cleaning adalah 50 meter persegi (untuk area di bawah 50 m² akan dikenakan penyesuaian harga).</li>
        <li>Jumlah petugas disesuaikan dengan luas area kantor dan tingkat kesulitan pembersihan, dengan rincian sebagai berikut:
            <ul>
                <li>Paket Small: &lt; 50 m² (1 petugas)</li>
                <li>Paket Medium: 50–100 m² (2 petugas)</li>
                <li>Paket Large: 100–150 m² (3 petugas)</li>
                <li>Paket Extra: &gt;150 m² (4 petugas atau lebih, sesuai kebutuhan)</li>
            </ul>
        </li>
        <li>Pelanggan diharapkan memastikan akses listrik, air, dan area kerja tersedia sebelum pengerjaan dimulai.</li>
        <li>Tim office cleaning tidak bertanggung jawab atas kerusakan pada barang yang tidak diinformasikan sebelumnya memiliki kondisi rapuh atau mudah rusak.</li>
        <li>Jam operasional office cleaning berlangsung setiap hari pukul 08.00–19.00 WIB.</li>
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
@endsection