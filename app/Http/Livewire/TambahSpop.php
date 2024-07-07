<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TambahSpop extends Component
{
    use LivewireAlert;
    public $data = [];

    public function render()
    {
        return view('livewire.tambah-spop');
    }

    public function simpan()
    {
        if (isset($this->data['petugas_tanda_tangan'])) {
            //ttd petugas
            $data_uri_petugas = $this->data['petugas_tanda_tangan'];
            $encoded_image_petugas = explode(',', $data_uri_petugas)[1];
            $decoded_image_petugas = base64_decode($encoded_image_petugas);

            $directory_petugas = public_path('img/ttd/spop/petugas');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_petugas)) {
                File::makeDirectory($directory_petugas, 0777, true, true);
            }

            $image_name_petugas = 'ttd_petugas_spop_petugas_' . Str::random(20) . '.png';
            $image_path_petugas = $directory_petugas . '/' . $image_name_petugas;

            file_put_contents($image_path_petugas, $decoded_image_petugas);

            $this->data['30_tanda_tangan_petugas'] = $image_name_petugas;
        }

        if (isset($this->data['pejabat_tanda_tangan'])) {
            //ttd pejabat
            $data_uri_pejabat = $this->data['pejabat_tanda_tangan'];
            $encoded_image_pejabat = explode(',', $data_uri_pejabat)[1];
            $decoded_image_pejabat = base64_decode($encoded_image_pejabat);

            $directory_pejabat = public_path('img/ttd/spop/pejabat');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_pejabat)) {
                File::makeDirectory($directory_pejabat, 0777, true, true);
            }

            $image_name_pejabat = 'ttd_pejabat_spop_pejabat_' . Str::random(20) . '.png';
            $image_path_pejabat = $directory_pejabat . '/' . $image_name_pejabat;

            file_put_contents($image_path_pejabat, $decoded_image_pejabat);

            $this->data['30_tanda_tangan_pejabat'] = $image_name_pejabat;
        }
        if (isset($this->data['sket_tanda_tangan'])) {

            //sket
            $data_uri_sket = $this->data['sket_tanda_tangan'];
            $encoded_image_sket = explode(',', $data_uri_sket)[1];
            $decoded_image_sket = base64_decode($encoded_image_sket);

            $directory_sket = public_path('img/sket');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_sket)) {
                File::makeDirectory($directory_sket, 0777, true, true);
            }

            $image_name_sket = 'sketsa' . Str::random(20) . '.png';
            $image_path_sket = $directory_sket . '/' . $image_name_sket;

            file_put_contents($image_path_sket, $decoded_image_sket);
            $this->data['sket_tanda_tangan'] = $image_name_sket;
        }

        if (isset($this->data['28_tanda_tangan'])) {

            //ttd 28
            $data_uri_28 = $this->data['28_tanda_tangan'];
            $encoded_image_28 = explode(',', $data_uri_28)[1];
            $decoded_image_28 = base64_decode($encoded_image_28);

            $directory_28 = public_path('img/ttd/spop/pernyataan');  // Tentukan direktori tujuan
            if (!File::isDirectory($directory_28)) {
                File::makeDirectory($directory_28, 0777, true, true);
            }

            $image_name_28 = 'ttd_pernyataan_spop_28_' . Str::random(20) . '.png';
            $image_path_28 = $directory_28 . '/' . $image_name_28;

            file_put_contents($image_path_28, $decoded_image_28);

            $this->data['28_tanda_tangan'] = $image_name_28;
        }

        $data = Spop::create($this->data);
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
