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

    protected $rules = [
        'nama_gambar' => 'image|max:4096|required', 
        'isi' => 'required',
        'judul' => 'required',
    ];
    
    protected $messages = [
        'nama_gambar.image' => 'File harus berupa gambar',
        'nama_gambar.max' => 'Ukuran gambar maksimal 4MB',
        'nama_gambar.required' => 'Gambar harus diisi',
        'isi.required' => 'Isi harus diisi',
        'judul.required' => 'Judul harus diisi',
    ];


    public function render()
    {
        return view('livewire.tambah-berita');
    }
    public function tambah()
    {
        $this->validate();

        $post = new Berita([
            'judul' => $this->judul,
            'isi' => $this->isi,
            'status' => 'aktif',

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
