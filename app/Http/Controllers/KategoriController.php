<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori :: all();
            return view('kategori.index_k',['dataKategori' => $data]);
    }

    public function create(){
        return view('kategori.create_k');
    }

    public function store(Request $request){
        $data = new Kategori();
        $data->id = $request->id;
        $data->nama_kategori = $request->nama_kategori;
        $data->save();
        return redirect('/tampil-kategori');
    }

    public function update(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();

        return redirect('/tampil-kategori');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect('/tampil-kategori');

    }
}
