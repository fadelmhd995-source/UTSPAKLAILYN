@extends('layouts.master')

@section('title', 'Shop')

@section('content')
@extends('layouts.header')

<div class="container mt-5">
    <h1 class="fw-bold mb-4">Shop Layanan Home Service</h1>
    <p class="mb-4">Pilih dan beli layanan kebersihan atau perawatan rumah sesuai kebutuhan Anda. Sistem kami akan merekomendasikan paket terbaik berdasarkan luas area dan preferensi Anda.</p>

    {{-- Form Algoritma Rekomendasi --}}
    <form method="POST" action="{{ route('shop.recommend') }}" class="mb-5">
        @csrf
        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="area" class="form-label">Luas Area (m²)</label>
                <input type="number" class="form-control" id="area" name="area" min="1" required>
            </div>
            <div class="col-md-4">
                <label for="service" class="form-label">Jenis Layanan</label>
                <select class="form-select" id="service" name="service" required>
                    <option value="">Pilih Layanan</option>
                    <option value="homecleaning">Home Cleaning</option>
                    <option value="deepcleaning">Deep Cleaning</option>
                    <option value="officecleaning">Office Cleaning</option>
                    <option value="ac">AC Cleaning & Service</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Rekomendasikan Paket</button>
            </div>
        </div>
    </form>

    {{-- Hasil Rekomendasi --}}
    @isset($recommendation)
        <div class="alert alert-success">
            <h5 class="mb-2">Rekomendasi Paket:</h5>
            <p class="mb-1"><strong>Paket:</strong> {{ $recommendation['package'] }}</p>
            <p class="mb-1"><strong>Jumlah Petugas:</strong> {{ $recommendation['staff'] }}</p>
            <p class="mb-1"><strong>Estimasi Harga:</strong> Rp{{ number_format($recommendation['price'], 0, ',', '.') }}</p>
        </div>
    @endisset

    {{-- Daftar Layanan --}}
    <div class="row mt-4">
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/homeclaening.jpg') }}" class="card-img-top" alt="Home Cleaning">
                <div class="card-body">
                    <h5 class="card-title">Home Cleaning</h5>
                    <p class="card-text">Pembersihan rumah rutin, bersih dan rapi setiap hari.</p>
                    <a href="{{ url('/homecleaning') }}" class="btn btn-outline-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/deep-cleaning.jpg') }}" class="card-img-top" alt="Deep Cleaning">
                <div class="card-body">
                    <h5 class="card-title">Deep Cleaning</h5>
                    <p class="card-text">Pembersihan mendalam untuk area sulit dan kotoran membandel.</p>
                    <a href="{{ url('/deepcleaning') }}" class="btn btn-outline-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/office-cleaning.jpg') }}" class="card-img-top" alt="Office Cleaning">
                <div class="card-body">
                    <h5 class="card-title">Office Cleaning</h5>
                    <p class="card-text">Kebersihan kantor profesional untuk lingkungan kerja nyaman.</p>
                    <a href="{{ url('/officecleaning') }}" class="btn btn-outline-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/ac.jpg') }}" class="card-img-top" alt="AC Cleaning & Service">
                <div class="card-body">
                    <h5 class="card-title">AC Cleaning & Service</h5>
                    <p class="card-text">Perawatan dan pembersihan AC agar udara tetap segar.</p>
                    <a href="{{ url('/accleaning') }}" class="btn btn-outline-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection