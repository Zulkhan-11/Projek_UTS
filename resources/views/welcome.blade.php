@extends('layouts.app')

@section('subtitle', 'Dashboard')
@section('content_header_title', 'Hai Pelanggan')
@section('content_header_subtitle', 'Selamat datang di Klinik Sehat')

@section('content_body')
    <div class="row animate__animated animate__fadeIn">
        <div class="col-md-4 mb-4">
            <div class="card card-dashboard bg-light-blue">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">12</h4>
                        <p class="mb-0">Pasien Hari Ini</p>
                    </div>
                    <i class="fas fa-user-injured fa-3x text-white"></i>
                </div>
                <a href="{{ url('/riwayat') }}" class="card-footer text-center text-white">
                    Lihat Riwayat <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-dashboard bg-light-green">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">8</h4>
                        <p class="mb-0">Pemeriksaan Aktif</p>
                    </div>
                    <i class="fas fa-stethoscope fa-3x text-white"></i>
                </div>
                <a href="{{ url('/periksa') }}" class="card-footer text-center text-white">
                    Periksa Sekarang <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-dashboard bg-light-yellow">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">4</h4>
                        <p class="mb-0">Obat Hampir Habis</p>
                    </div>
                    <i class="fas fa-pills fa-3x text-white"></i>
                </div>
                <a href="{{ url('/obat') }}" class="card-footer text-center text-white">
                    Cek Stok <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow animate__animated animate__fadeInUp">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title"><i class="fas fa-heartbeat"></i> Informasi Umum</h3>
        </div>
        <div class="card-body">
            <p class="lead">Selamat datang di <strong>Klinik </strong>. Gunakan fitur di sidebar untuk mulai mengelola data pasien, pemeriksaan, dan stok obat. Semoga harimu sehat dan lancar! 💙</p>
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
       /* Kartu dashboard */
.card-dashboard {
    border-radius: 1rem;
    color: white;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.card-dashboard:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 25px rgba(0,0,0,0.15);
}

.bg-light-blue {
    background: linear-gradient(135deg, #00c6ff, #0072ff); /* Cerah lebih biru */
}

.bg-light-green {
    background: linear-gradient(135deg, #00ff7f, #32cd32); /* Cerah lebih hijau */
}

.bg-light-yellow {
    background: linear-gradient(135deg,rgb(217, 211, 20), #ffcc00); /* Cerah lebih kuning */
}

.card-footer {
    background: rgba(255,255,255,0.1);
    border-top: none;
}

.lead {
    font-size: 1.1rem;
}

/* Sidebar: Aktif & hover */
.nav-sidebar .nav-item > .nav-link.active {
    background-color: #007bff !important;
    color: #ffffff !important;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    border-radius: 0.5rem;
}

.nav-sidebar .nav-item > .nav-link.active i {
    color: #ffffff !important;
}

.nav-sidebar .nav-link:hover {
    background-color: #0056b3;
    color: #fff;
}
    </style>
@endpush

@push('js')
    <script>
        console.log("Klinik dashboard aktif dengan desain estetik ✨");
    </script>
@endpush
