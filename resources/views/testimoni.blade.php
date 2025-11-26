@extends('layouts.master')

@section('title', 'Testimoni')

@section('content')
@extends('layouts.header')
<div class="container my-5">
    <h1 class="fw-bold text-center mb-5">Pesan Testimoni</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimoni.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan Testimoni</label>
                            <textarea name="pesan" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <select name="rating" class="form-select" required>
                                <option value="">Pilih Rating</option>
                                <option value="5">5 - Sangat Puas</option>
                                <option value="4">4 - Puas</option>
                                <option value="3">3 - Cukup</option>
                                <option value="2">2 - Kurang</option>
                                <option value="1">1 - Tidak Puas</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection