<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PraktikumController;
use App\Http\Controllers\ProdukController;

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
Route::get('produk', [PraktikumController::class, 'product']);
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