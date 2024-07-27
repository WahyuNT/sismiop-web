<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $dataid = $data->id;
        return view('pages.berita.edit', compact('data', 'dataid'));
    }
    public function updateStore(Request $request)
    {
        $data = Berita::find($request->id);
        $data->judul = $request->judul;
        $data->isi = $request->isi;

        if ($request->hasFile('nama_gambar')) {
            $gambarLama = $data->nama_gambar;

            if ($gambarLama && Storage::disk('real_public')->exists('img/berita/' . $gambarLama)) {
                Storage::disk('real_public')->delete('img/berita/' . $gambarLama);
            }

            $gambar = $request->file('nama_gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs(('img/berita'), $nama_gambar, 'real_public');
            $data->nama_gambar = $nama_gambar;
        }

    
        if ($data->save()) {
            return redirect()->route('berita.index')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('berita.index')->with('error', 'Data Gagal Diubah');
        }
    }
    public function detail($id)
    {
       
        $data = Berita::find($id);
        return view('pages.berita.detail', compact('data'));
    }
}
