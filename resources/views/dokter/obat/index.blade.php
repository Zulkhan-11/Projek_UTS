@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header text-white" style="background: linear-gradient(90deg,rgb(247, 0, 148),rgb(249, 4, 147));">
        <h5 class="mb-0 d-flex justify-content-between align-items-center">
            Daftar Obat
            <a href="{{ route('obat.create')}}" class="btn btn-light btn-sm">
                <i class="fas fa-plus-circle"></i> Tambah Obat
            </a>
        </h5>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="text-white" style="background-color:rgb(32, 133, 216);">
                <tr>
                    <th style="width: 5%;">No.</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_obat }}</td>
                        <td>{{ $item->kemasan }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('obat.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
