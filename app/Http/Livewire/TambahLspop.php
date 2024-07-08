<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahLspop extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $data = [];

    public function render()
    {
        return view('livewire.tambah-lspop');
    }

    public function simpan()
    {
        if ($this->data['56_tanda_tangan']) {
            $data_uri_56 = $this->data['56_tanda_tangan'];
            $encoded_image_56 = explode(',', $data_uri_56)[1];
            $decoded_image_56 = base64_decode($encoded_image_56);

            $directory_56 = public_path('img/ttd/lspop/pendata');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_56)) {
                File::makeDirectory($directory_56, 0777, true, true);
            }

            $image_name_56 = 'ttd_petugas_lspop_56_' . Str::random(20) . '.png';
            $image_path_56 = $directory_56 . '/' . $image_name_56;
            file_put_contents($image_path_56, $decoded_image_56);
            $this->data['56_tanda_tangan'] = $image_name_56;
       
        }

        if ($this->data['60_tanda_tangan']) {
            $data_uri_60 = $this->data['60_tanda_tangan'];
            $encoded_image_60 = explode(',', $data_uri_60)[1];
            $decoded_image_60 = base64_decode($encoded_image_60);

            $directory_60 = public_path('img/ttd/lspop/pejabat');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_60)) {
                File::makeDirectory($directory_60, 0777, true, true);
            }

            $image_name_60 = 'ttd_pejabat_lspop_60_' . Str::random(20) . '.png';
            $image_path_60 = $directory_60 . '/' . $image_name_60;
            file_put_contents($image_path_60, $decoded_image_60);
            $this->data['60_tanda_tangan'] = $image_name_60;
        }

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
