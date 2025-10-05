<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lat', function () {
    return view('latihan');
});

Route::get('bio', function () {
    return view('biodata');
});

Route::get('produk', function () {
    return view('produk');
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