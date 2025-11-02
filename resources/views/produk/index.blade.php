@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <h2>Tabel Produk</h2>
    {{-- Tidak bisa jika menggunakan href tidak muncul pop up --}}
    {{-- ////// --}}
    {{-- <a href="{{route('produk.create')}}" class="btn btn-success">+Tambah Data</a> --}}
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">+Tambah Data</button>
    <table class="table table-bordered table stripper" id="tabel-produk">
        <thead>
            <tr>
                <th style="width:1%">No.</th>
                <th style="width:5%">Kode Produk</th>
                <th style="width:5%">Nama Produk</th>
                <th style="width:5%">Harga</th>
                <th style="width:5%">Stok</th>
                <th style="width:5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataProduk as $data)
            <tr>
                <td> {{ $loop->iteration}}</td>
                <td> {{ $data->id}}</td>
                <td> {{ $data->nama_produk}}</td>
                <td> {{ number_format($data->harga, 0, ',', '.') }}</td>
                <td> {{ $data->stock}}</td>
                <td>
                    <button class="btn btn-warning"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEditProduk{{ $data->id }}">
                    Ubah</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modalHapusProduk{{ $data->id }}">Hapus</button>
                </td>
            </tr>
            @include('produk.edit', ['data' => $data])
            @include('produk.delete',['dat'=> $data])
            @endforeach
        </tbody>

    </table>
</div>







@include('produk.create')

@stop

@push('scripts')
<script>
$(function(){
    $('tabel-produk').DataTable();
});
</script>
@endpush