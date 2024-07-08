<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DetailLspop extends Component
{
    use LivewireAlert;

    public $dataId;
    public $disabled = 'disabled';
    public $data = [];
    public $isEdit = false;
    public $edit56 = false;
    public $edit60 = false;
    public $newTTD56 = null;
    public $newTTD60 = null;

    public function mount($id)
    {
        $this->dataId = $id;
    }

    public function render()
    {
        $lspop = null;

        $lspop = Lspop::find($this->dataId);
        $lspopArray = $lspop->toArray();
        $this->data = $lspopArray;

        return view('livewire.detail-lspop', compact('lspop'));
    }

    public function updateData()
    {
        if ($this->newTTD56 != null) {
            $data_uri_56 = $this->newTTD56;
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

        $data = Lspop::find($this->dataId);
        $data->update($this->data);

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diupdate');
            $this->disabled = 'disabled';
            $this->isEdit = false;
            $this->edit56 = false;
            $this->edit60 = false;
        } else {
            $this->alert('error', 'Data gagal diupdate');
        }
    }

    public function edit()
    {
        $this->disabled = '';
        $this->isEdit = true;
    }

    public function cancelEdit()
    {
        $this->disabled = 'disabled';
        $this->isEdit = false;

        $lspop = Lspop::find($this->dataId);
        $lspop = $lspop->toArray();
        $this->data = $lspop;
    }

    public function edit56()
    {
        $this->edit56 = true;
    }

    public function cancelEdit56()
    {
        $this->edit56 = false;
        $this->newTTD56 = null;
    }

    public function edit60()
    {
        $this->edit60 = true;
    }

    public function cancelEdit60()
    {
        $this->edit60 = false;
        $this->newTTD60 = null;
    }

    public function simpan60()
    {
        $gambarLama60 = Lspop::find($this->dataId)->getOriginal()['60_tanda_tangan'];
        $gambarLama60 = public_path('img/ttd/lspop/pejabat/' . $gambarLama60);

        if ($this->newTTD60 != null) {
            $data_uri_60 = $this->newTTD60;
            $encoded_image_60 = explode(',', $data_uri_60)[1];
            $decoded_image_60 = base64_decode($encoded_image_60);

            $directory_60 = public_path('img/ttd/lspop/pejabat');
            if (!File::isDirectory($directory_60)) {
                File::makeDirectory($directory_60, 0777, true, true);
            }

            $image_name_60 = 'ttd_pejabat_lspop_60_' . Str::random(20) . '.png';
            $image_path_60 = $directory_60 . '/' . $image_name_60;
            file_put_contents($image_path_60, $decoded_image_60);
            $this->data['60_tanda_tangan'] = $image_name_60;

            $data = Lspop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLama60)) {
                    unlink($gambarLama60);
                }
                $this->alert('success', 'Tanda tangan pejabat berhasil diperbarui');
                $this->edit60 = false;
                $this->newTTD60 = null;
            } else {
                $this->alert('error', 'Tanda tangan pejabat gagal diperbarui');
            }
        } else {
            $this->edit60 = false;
            $this->alert('error', 'Tidak ada tanda tangan pejabat yang diupload');
        }
    }

    public function simpan56()
    {
        $gambarLama56 = Lspop::find($this->dataId)->getOriginal()['56_tanda_tangan'];
        $gambarLama56 = public_path('img/ttd/lspop/pendata/' . $gambarLama56);

        if ($this->newTTD56 != null) {
            $data_uri_56 = $this->newTTD56;
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

            $data = Lspop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLama56)) {
                    unlink($gambarLama56);
                }

                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit56 = false;
                $this->newTTD56 = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit56= false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }
}
