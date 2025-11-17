<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PraktikumController;
use App\Http\Controllers\ProdukController;
use App\Models\Kategori;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lat', function () {
    return view('latihan');
});

Route::get('bio', function () {
    return view('biodata');
});

Route::get('nama', function () {
    return view('nama', ['name' => 'Kunti Eliyen']);
});

Route::get('nilai1', function () {
    return view('getnilai1');
});

Route::get('nilai2', function () {
    return view('getnilai2');
});

Route::get('transaksi', function () {
    return view('transaksi');
});

Route::get('laporan', function () {
    return view('laporan');
});

Route::get('home', function () {
    return view('home');
});

Route::get('home', [PraktikumController::class, 'home']);
Route::get('produk', [ProdukController::class, 'index']);
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('transaksi', [PraktikumController::class, 'transaction']);
Route::get('laporan', [PraktikumController::class, 'report']);
Route::get('tampil-produk', [ProdukController::class, 'index']);
Route::get('tambah-produk', [ProdukController::class,'create'])->name('produk.create');

//simpan data produk
Route::post('tampil-produk',[ProdukController::class,'store'])->name('produk.store');

//update
Route::put('/produk/update/{id}',[ProdukController::class,'update'])->name('produk.update');

//Delete
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');



//Produk
Route::get('tampil-kategori', [KategoriController::class, 'index']);
//tambah data kategori
Route::get('tambah-kategori', [KategoriController::class, 'create_k'])->name('kategori.create_k');
//simpan data kategori
Route::post('tampil-kategori', [KategoriController::class, 'store'])->name('kategori.store');
//update
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
//delete
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


//Export Excel
Route::get('/export-produk', [ProdukController::class, 'excel'])->name('produk.excel');

//Export PDF
Route::get('/produk/export/pdf', [ProdukController::class, 'pdf'])->name('produk.pdf');

//Chart
Route::get('/produk/chart', [ProdukController::class, 'chart'])->name('produk.chart');

