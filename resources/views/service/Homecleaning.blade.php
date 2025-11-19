@extends('layouts.master')

@section('title', 'Home Cleaning')

@section('content')
@extends('layouts.header')

<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h1 class="fw-bold display-3 mb-4">
                Home Cleaning<br>
                <span style="color:#247cff;">Bersih, Rapi, dan Nyaman</span>
            </h1>
            <p class="fs-5 mb-4">
                Layanan pembersihan rumah profesional untuk menciptakan hunian yang sehat dan nyaman.<br>
                Serahkan urusan bersih-bersih pada tim kami, Anda tinggal menikmati hasilnya!
            </p>
        </div>
        <!-- Kolom Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/homeclaening.jpg') }}" alt="Home Cleaning" class="img-fluid rounded shadow" style="max-width:100%; margin-top:20px;">
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Ketentuan Pengerjaan Home Cleaning</h2>
    <ul>
        <li>Pengerjaan home cleaning dilakukan secara fokus dan tidak bersamaan dengan pengerjaan layanan lain agar hasil pembersihan lebih maksimal.</li>
        <li>Pembersihan dilakukan menggunakan cairan pembersih dan alat standar yang disediakan oleh pihak layanan home cleaning.</li>
        <li>Sebelum pengerjaan dimulai, pelanggan disarankan untuk memberikan informasi mengenai kondisi rumah dan area yang ingin dibersihkan, agar tim dapat menyiapkan peralatan yang sesuai.</li>
        <li>Luas minimal area pengerjaan home cleaning adalah 40 meter persegi (untuk area di bawah 40 m² akan dikenakan penyesuaian harga).</li>
        <li>Jumlah petugas disesuaikan dengan luas area rumah dan tingkat kesulitan pembersihan, dengan rincian sebagai berikut:
            <ul>
                <li>Paket Small: &lt; 50 m² (1 petugas)</li>
                <li>Paket Medium: 50–100 m² (2 petugas)</li>
                <li>Paket Large: 100–150 m² (3 petugas)</li>
                <li>Paket Extra: &gt;150 m² (4 petugas atau lebih, sesuai kebutuhan)</li>
            </ul>
        </li>
        <li>Pelanggan diharapkan memastikan akses listrik, air, dan area kerja tersedia sebelum pengerjaan dimulai.</li>
        <li>Tim home cleaning tidak bertanggung jawab atas kerusakan pada barang yang tidak diinformasikan sebelumnya memiliki kondisi rapuh atau mudah rusak.</li>
        <li>Jam operasional home cleaning berlangsung setiap hari pukul 08.00–19.00 WIB.</li>
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

@if(request('order') == 1)
    {{-- Form pesan layanan --}}
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Pesan Layanan</h5>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="hidden" name="service" value="{{ $service ?? '' }}">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" rows="2" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Luas Area (m²)</label>
                    <input type="number" name="area" class="form-control" min="1" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Catatan (opsional)</label>
                    <textarea name="notes" class="form-control" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
            </form>
        </div>
    </div>
@endif
@endsection