@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <h2>Tabel Kategori</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahKategori">+Tambah Data</button>
    <table class="table table-bordered table-striped" id="tabel-kategori">
        <thead>
            <tr>
                <th style="width:1%">No.</th>
                <th style="width:5%">Kode Kategori</th>
                <th style="width:5%">Nama Kategori</th>
                <th style="width:5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataKategori as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_kategori }}</td>
                <td>
                    <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalEditKategori{{ $data->id }}">
                        Ubah
                    </button>

                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>


            @include('kategori.edit_k', ['data' => $data])
            @endforeach
        </tbody>
    </table>
</div>

@include('kategori.create_k')

@stop

@push('scripts')
<script>
$(function(){
    $('#tabel-kategori').DataTable();
});
</script>
@endpush
