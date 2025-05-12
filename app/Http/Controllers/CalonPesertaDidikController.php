<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonPesertaDidik;
use Illuminate\Support\Facades\Redirect;

class CalonPesertaDidikController extends Controller
{
    // Menampilkan form PPDB
    public function create()
    {
        return view('ppdb.form');
    }

    // Menyimpan data dari form
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
        ]);

        // Simpan data ke database
        CalonPesertaDidik::create($request->all());

        // Redirect dengan pesan sukses
        return Redirect::route('calon_peserta_didik.create')->with('success', 'Pendaftaran berhasil!');
    }
}