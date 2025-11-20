<div class="container my-5">
    <h3 class="fw-bold mb-4">Hubungi Kami</h3>
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="company" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Kritik & Saran <span class="text-danger">*</span></label>
                <textarea name="message" rows="8" class="form-control" required></textarea>
            </div>
        </div>

        <div class="d-flex align-items-start mt-3">
            <button type="submit" class="oclean-cta-btn">SUBMIT</button>
        </div>
    </form>
</div>
