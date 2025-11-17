<?php

namespace App\Http\Controllers;

use App\Exports\ProdukExport;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Maatwebsite\Excel\Facades\Excel;
class ProdukController extends Controller
{
    public function index(){
        $data = Produk :: all();
        $kategori = Kategori::all();
        return view('produk.index',['dataProduk' => $data,
        'kategori'=> $kategori]);
    }

    public function create(){
        $kategori = Kategori :: all();
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request){

        $message=[
            'required' => ':attribute tidak boleh kosogn',
            'unique' => ':atrribute sudah digunakana',
            'numeric' => ':attribute harus berupa angka',
        ];
        $validateData = $request->validate([
            'id' => 'required|numeric|unique:produk',
            'nama_produk' => 'required|unique:produk',
        ]).$message;
        $data = new Produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->kategori_id = $request->kategori;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->save();
        return redirect('/tampil-produk')->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id){
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->update();

        return redirect('/tampil-produk')->with('success','Data berhasil diubah');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk')->with('success','Data berhasil dihapus');

    }

    public function excel(){
        return Excel::download(new ProdukExport,'produk.xlsx');
    }

    public function pdf(){
        $data = Produk::all();
        return view('produk.pdfproduk',['dataProduk' => $data]);
    }

    public function chart() {
        $datalabel = Produk::orderBy('nama_produk', 'asc')
        ->pluck('nama_produk')->toArray();
        $dataStock = Produk::orderBy('nama_produk','asc')
        ->pluck('stock')->toArray();

        return view('produk.chart', compact('datalabel','dataStock'));

    }
}

    