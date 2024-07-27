<?php

namespace App\Http\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditBerita extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $judul;
    public $isi;
    public $nama_gambar;

    public $dataid;

    public function mount($id)
    {
        $this->dataid = $id;
    }

    public function render()
    {
        $data = Berita::find($this->dataid);
        // $judul = $data->judul;

        // $nama_gambar = $data->nama_gambar;
        $this->judul = $data->judul;
        // $this->isi = $data->isi;
        $this->nama_gambar = $data->nama_gambar;
       
        return view('livewire.edit-berita', with(['data' => $data]));
    }

    public function update()
    {
        $data = Berita::find($this->dataid);
        $data->judul = $this->judul;
        $data->isi = $this->isi;

        // if ($this->nama_gambar != null) {
        //     $currentTimestamp = time();
        //     $Gambar = 'berita' . '_' . $currentTimestamp . '.' . $this->nama_gambar->getClientOriginalExtension();
        //     $filePath = $this->nama_gambar->storeAs(('img/berita'), $Gambar, 'real_public');
        //     $data->nama_gambar = $Gambar;
        // }

        if ($data->save()) {
            redirect()->route('berita.index');

            $this->judul = null;
            $this->isi = null;
            $this->nama_gambar = null;


            $this->alert('success', 'Data Berhasil Diubah', [
                'position' => 'center'
            ]);
        } else {
            $this->alert('error', 'Data Gagal Diubah', [
                'position' => 'center'
            ]);
        }
    }
}
