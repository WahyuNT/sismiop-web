<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DetailSpop extends Component
{
    use LivewireAlert;

    public $dataId;
    public $disabled = 'disabled';
    public $data = [];
    public $isEdit = false;
    public $edit28 = false;
    public $newTTD28 = null;

    public function mount($id)
    {
        $this->dataId = $id;
    }

    public function render()
    {
        $spop = Spop::find($this->dataId);
        $spopArray = $spop->toArray();
        $this->data = $spopArray;
        $placeholder = 'Masukkan Data';

        $disabled = $this->disabled;
        $isEdit = $this->isEdit;

        return view('livewire.detail-spop', compact('spopArray', 'spop', 'placeholder', 'disabled', 'isEdit'));
    }

    public function updateData()
    {
        $data = Spop::find($this->dataId);
        $data->update($this->data);

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diupdate');
            $this->disabled = 'disabled';
            $this->isEdit = false;
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

        $spop = Spop::find($this->dataId);
        $spop = $spop->toArray();
        $this->data = $spop;
    }

    public function edit28()
    {
        $this->edit28 = true;
    }

    public function cancelEdit28()
    {
        $this->edit28 = false;
        $this->newTTD28 = null;
    }

    public function simpan28()
    {
        $gambarLama28 = Spop::find($this->dataId)->getOriginal()['28_tanda_tangan'];
        $gambarLama28 = public_path('img/ttd/spop/pernyataan/' . $gambarLama28);

        if ($this->newTTD28 != null) {
            $data_uri_28 = $this->newTTD28;
            $encoded_image_28 = explode(',', $data_uri_28)[1];
            $decoded_image_28 = base64_decode($encoded_image_28);

            $directory_28 = public_path('img/ttd/spop/pernyataan');
            if (!File::isDirectory($directory_28)) {
                File::makeDirectory($directory_28, 0777, true, true);
            }

            $image_name_28 = 'ttd_pernyataan_spop_28_' . Str::random(20) . '.png';
            $image_path_28 = $directory_28 . '/' . $image_name_28;
            file_put_contents($image_path_28, $decoded_image_28);
            $this->data['28_tanda_tangan'] = $image_name_28;

            $data = Spop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLama28)) {
                    unlink($gambarLama28);
                }
                $this->alert('success', 'Tanda tangan pernyataan berhasil diperbarui');
                $this->edit28 = false;
            } else {
                $this->alert('error', 'Tanda tangan pernyataan gagal diperbarui');
            }
        } else {
            $this->edit28 = false;
            $this->alert('error', 'Tidak ada tanda tangan pernyataan yang diupload');
        }
    }
}
