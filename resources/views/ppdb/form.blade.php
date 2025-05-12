@extends('layouts.app')

@section('title', 'Form PPDB - SKB Palembang')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">FORMULIR PENERIMAAN PESERTA DIDIK BARU</h2>
            <p class="text-center mb-0">SKB PALEMBANG TAHUN AJARAN {{ date('Y') }}/{{ date('Y')+1 }}</p>
        </div>
        
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('ppdb.store') }}" method="POST">
                @csrf
                
                <h5 class="mb-3 text-primary">DATA PRIBADI</h5>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi dengan nama lengkap sesuai akte kelahiran" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label fw-bold">Asal Sekolah <span class="text-danger">*</span></label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Sekolah sebelumnya" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label fw-bold">Tempat Lahir <span class="text-danger">*</span></label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Kota/kabupaten kelahiran" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label fw-bold">Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Kelamin <span class="text-danger">*</span></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required>
                                <label class="form-check-label" for="laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h5 class="mb-3 mt-4 text-primary">DATA KONTAK</h5>
                
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat Lengkap <span class="text-danger">*</span></label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat lengkap tempat tinggal saat ini" required></textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="no_hp" class="form-label fw-bold">Nomor HP/WhatsApp <span class="text-danger">*</span></label>
                            <input type="tel" name="no_hp" id="no_hp" class="form-control" placeholder="Contoh: 081234567890" required>
                            <small class="text-muted">Pastikan nomor aktif untuk konfirmasi</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="email@contoh.com">
                            <small class="text-muted">(Opsional) Untuk informasi penting</small>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-primary py-3">
                        <i class="fas fa-paper-plane me-2"></i> KIRIM PENDAFTARAN
                    </button>
                </div>
            </form>
        </div>
        
        <div class="card-footer text-muted text-center">
            <small>Semua bidang bertanda <span class="text-danger">*</span> wajib diisi</small>
        </div>
    </div>
</div>
@endsection