@extends('adminlte::page')

@section('title', 'Edit Periksa')

@section('content_header')
    <h1>Edit Periksa Pasien</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">Form Edit Pemeriksaan</div>
    <div class="card-body">
        <form action="{{ route('periksa.update', $id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="nama" name="nama" value="">
            </div>

            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="keluhan"></textarea>
            </div>

            <div class="mb-3">
                <label for="tindakan" class="form-label">Tindakan</label>
                <input type="text" class="form-control" id="tindakan" name="tindakan" value="">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
