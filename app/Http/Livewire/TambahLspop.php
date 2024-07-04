<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

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

        $directory = public_path('assets/img/ttd'); // Tentukan direktori tujuan
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }

        $image_name = 'Str::random(100)' . '.png';
        $image_path = $directory . '/' . $image_name;

        file_put_contents($image_path, $decoded_image);


        $this->data['56_tanda_tangan'] = $image_name;

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
