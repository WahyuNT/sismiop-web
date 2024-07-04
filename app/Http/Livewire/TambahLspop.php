<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class TambahLspop extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $data = [];
    public $ttd;

    public function render()
    {
        return view('livewire.tambah-lspop');
    }

    public function simpan()
    {
        $data_uri = $this->ttd;
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);



        $currentTimestamp = time();

        $fielName = 'ttd' . '_' . $currentTimestamp . '.' . 'png';
        $filePath = $this->decoded_image->storeAs(('img/ttd'), $fielName, 'real_public');



        $data = Lspop::create($this->data);



        if ($data) {
            $this->nullData();
            $this->alert('success', 'Data berhasil disimpan');
        } else {
            $this->alert('error', 'Data gagal disimpan');
        }
    }


    public function nullData()
    {
        $this->data = [];
    }
}
