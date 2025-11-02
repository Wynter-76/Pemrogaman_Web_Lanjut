<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        $data = Produk :: all();
            return view('produk.index',['dataProduk' => $data]);
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $data = new Produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->save();
        return redirect('/tampil-produk');
    }

    public function update(Request $request, $id){
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->update();

        return redirect('/tampil-produk');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk');

    }
}
