<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(10);
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'gambar'      => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi'   => 'required',
            'harga'       => 'required',
            'stok'        => 'required'
        ]);

        $gambar = $request->file('gambar');
        $namaFile = $gambar->hashName();
        $gambar->storeAs('', $namaFile, 'public');
        
        // simpan ke database
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'gambar'      => $gambar->hashName(),
            'deskripsi'   => $request->deskripsi,
            'harga'       => $request->harga,
            'stok'        => $request->stok
        ]);

        return redirect('/produk')
            ->with('success', 'Data berhasil ditambahkan');
    }
}
