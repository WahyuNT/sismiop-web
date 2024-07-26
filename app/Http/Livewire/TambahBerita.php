<?php

namespace App\Http\Livewire;

use App\Models\Berita;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahBerita extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $judul;
    public $isi;
    public $nama_gambar;

    public function render()
    {
        return view('livewire.tambah-berita');
    }
    public function tambah()
    {

        $post = new Berita([
            'judul' => $this->judul,
            'isi' => $this->isi,
            'status' => 'aktif',

        ]);

        $this->validate([
            'nama_gambar' => 'image|max:4096|required', // 4MB Max
        ]);

        $currentTimestamp = time();
        if ($this->nama_gambar != null) {
            $Gambar = 'berita' . '_' . $currentTimestamp . '.' . $this->nama_gambar->getClientOriginalExtension();
            $filePath = $this->nama_gambar->storeAs(('img/berita'), $Gambar, 'real_public');
            $post->nama_gambar = $Gambar;
        }

        if ($post->save()) {
            redirect()->route('berita.index');

            $this->judul = null;
            $this->isi = null;
            $this->nama_gambar = null;

            $this->alert('success', 'Data Berhasil Ditambahkan', [
                'position' => 'center'
            ]);
        } else {
            $this->alert('error', 'Data Gagal Ditambahkan', [
                'position' => 'center'
            ]);
        }
    }
}
