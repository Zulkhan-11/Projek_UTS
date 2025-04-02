@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
<div class="card">
    <div class="card-header">Periksa</div>
    <div class="card-body">
        <table class="table caption-top">
            <caption>List of Examinations</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Diagnosis</th>
                    <th scope="col">Doctor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ahmad Fauzan</td>
                    <td>Flu</td>
                    <td>Dr. Naufal Muflih</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Siti Aisyah</td>
                    <td>Demam</td>
                    <td>Dr. Naufal Muflih</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Budi Santoso</td>
                    <td>Sakit Kepala</td>
                    <td>Dr. Naufal Muflih</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
