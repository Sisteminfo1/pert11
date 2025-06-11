<?php

use Illuminate\Support\Facades\Route;
use App\Models\Prodi;

// Route default yang menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk menambah data ke tabel prodi
Route::get('/prodi/create', function () {
    Prodi::create([
        'kode_prodi' => 'IF',
        'nama_prodi' => 'Informatika'
    ]);
    return "Berhasil Tambah Data Prodi";
});

// Route untuk menampilkan semua data dari tabel prodi
Route::get('/prodi/lihat', function () {
    $prodis = Prodi::all();
    foreach ($prodis as $prodi) {
        echo $prodi->kode_prodi . " - " . $prodi->nama_prodi . "<br>";
    }
});
