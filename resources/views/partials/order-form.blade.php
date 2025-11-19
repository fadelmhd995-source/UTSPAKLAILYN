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