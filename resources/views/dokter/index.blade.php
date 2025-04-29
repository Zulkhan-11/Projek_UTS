@extends('layouts.app')

@section('subtitle', 'Dashboard Dokter')
@section('content_header_title', 'Dashboard')
@section('content_header_subtitle', 'Selamat Datang, Dokter!')

@section('content')
<div class="container-fluid">

    <!-- Ringkasan Kartu Statistik -->
    <div class="row">
        <!-- Pasien Hari Ini -->
        <div class="col-md-3 col-sm-6">
            <div class="card bg-gradient-primary text-white shadow-lg hover-shadow-xl">
                <div class="card-body">
                    <h5><i class="fas fa-user-injured mr-2"></i>Pasien Hari Ini</h5>
                    <h2 class="font-weight-bold">75</h2>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('periksa.index') }}" class="text-white">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Obat Tersedia -->
        <div class="col-md-3 col-sm-6">
            <div class="card bg-gradient-success text-white shadow-lg hover-shadow-xl">
                <div class="card-body">
                    <h5><i class="fas fa-pills mr-2"></i>Obat Tersedia</h5>
                    <h2 class="font-weight-bold">20</h2>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('obat.index') }}" class="text-white">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Jadwal Operasi -->
        <div class="col-md-3 col-sm-6">
            <div class="card bg-gradient-warning text-white shadow-lg hover-shadow-xl">
                <div class="card-body">
                    <h5><i class="fas fa-calendar-alt mr-2"></i>Jadwal Operasi</h5>
                    <h2 class="font-weight-bold">2</h2>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="text-white">Lihat Jadwal <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Notifikasi -->
        <div class="col-md-3 col-sm-6">
            <div class="card bg-gradient-danger text-white shadow-lg hover-shadow-xl">
                <div class="card-body">
                    <h5><i class="fas fa-bell mr-2"></i>Notifikasi</h5>
                    <h2 class="font-weight-bold">12</h2>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="text-white">Lihat Semua <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Panel Selamat Datang dan Info -->
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card shadow-lg border-primary">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">👋 Selamat Datang, Dr.Zulkhan</h5>
                </div>
                <div class="card-body">
                    <p>Gunakan dashboard ini untuk melihat informasi terbaru mengenai pasien, obat-obatan, dan jadwal praktik Anda.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success mr-2"></i>Cek data pemeriksaan hari ini</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i>Kelola stok obat</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i>Lihat notifikasi dari admin</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profil Singkat -->
        <div class="col-md-4">
            <div class="card text-center shadow-lg border-info">
                <div class="card-body">
                <img src="{{ asset('images/foto2.jpg') }}" alt="Dokter" class="img-fluid rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;" />
                    <style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 3px solid #17a2b8;" />
                </div>
                <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
                    <h5 style="margin: 0; font-weight: 600;">Dr.Zulkhan Arbi</h5>
                    <p style="margin: 0; color: #6c757d;">| Spesialis Kelamin</p>
                </div>
                <div style="text-align: center; margin-top: 15px;">
                    <button type="button" class="btn btn-success btn-sm" style="pointer-events: none;">Online</button>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
