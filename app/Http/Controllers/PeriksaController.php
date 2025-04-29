<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;



class PeriksaController extends Controller
{
    public function index()
    {
        $periksas = Periksa::all(); // Ambil semua data dari tabel periksas
    return view('dokter.periksa.index', compact('periksas'));
    }

    public function edit($id)
    {
    return view('dokter.periksa.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil diperbarui!');

    }


    

    // CRUD opsional juga di sini
    public function create() 
    {
        return view('dokter.periksa.create');
    }
    public function store(Request $request) 
    {
        Periksa::create($request->all());
        return redirect()->route('periksa.index')->with('success', 'Data pasien berhasil ditambahkan!');
    }
    public function show($id) {}
    public function destroy($id) {}
}
