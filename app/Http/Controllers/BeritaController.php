<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('pages.berita.index');
    }
    public function tambah()
    {
        return view('pages.berita.tambah');
    }
    public function edit($id)
    {
    $data = Berita::find($id);
    $dataid=$data->id;
        return view('pages.berita.edit', compact('data','dataid'));
    }
    public function updateStore(Request $request)
    {
        // dd($request->all());
        $data = Berita::find($request->id);
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->save();
        return redirect()->route('berita.index')->with('success', 'Data Berhasil Diubah');
    }
}
