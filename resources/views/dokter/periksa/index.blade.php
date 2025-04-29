@extends('adminlte::page')

@section('title', 'Periksa')

@section('content_header')
    <h1>Memeriksa</h1>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header text-white" style="background: linear-gradient(90deg,rgb(247, 0, 148),rgb(240, 17, 132));">
            <h5 class="mb-0">Daftar Periksa Pasien</h5>
        </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <caption>List of users</caption>
                    <thead style="background-color:rgb(32, 133, 216); color: white;">
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Firman Utina</td>
                            <td>
                                <a href="{{ route('periksa.edit', 1) }}" class="btn btn-outline-dark btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sahrul Tisna</td>
                            <td>
                                <a href="{{ route('periksa.edit', 2) }}" class="btn btn-outline-dark btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Yohanes Pahabol</td>
                            <td>
                                <a href="{{ route('periksa.edit', 3) }}" class="btn btn-outline-dark btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
