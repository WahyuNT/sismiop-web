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
    public $edit30A = false;
    public $edit30B = false;
    public $editsket = false;
    public $newTTD28 = null;
    public $newTTD30A = null;
    public $newTTD30B = null;
    public $newsket = null;

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

        $sket64 = $spop->sket_base64;

        return view('livewire.detail-spop', compact('spopArray', 'spop', 'placeholder', 'disabled', 'isEdit', 'sket64'));
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

    public function edit30A()
    {
        $this->edit30A = true;
    }

    public function editsket()
    {
        $this->editsket = true;
    }

    public function cancelEditSket()
    {
        $this->editsket = false;
        $this->newsket = null;
    }

    public function cancelEdit30A()
    {
        $this->edit30A = false;
        $this->newTTD30A = null;
    }

    public function edit30B()
    {
        $this->edit30B = true;
    }

    public function cancelEdit30B()
    {
        $this->edit30B = false;
        $this->newTTD30B = null;
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
                $this->newTTD28 = null;
            } else {
                $this->alert('error', 'Tanda tangan pernyataan gagal diperbarui');
            }
        } else {
            $this->edit28 = false;
            $this->alert('error', 'Tidak ada tanda tangan pernyataan yang diupload');
        }
    }

    public function simpan30A()
    {
        $gambarLama30A = Spop::find($this->dataId)->getOriginal()['30_tanda_tangan_petugas'];
        $gambarLama30A = public_path('img/ttd/spop/pendata/' . $gambarLama30A);

        if ($this->newTTD30A != null) {
            $data_uri_30A = $this->newTTD30A;
            $encoded_image_30A = explode(',', $data_uri_30A)[1];
            $decoded_image_30A = base64_decode($encoded_image_30A);

            $directory_30A = public_path('img/ttd/spop/pendata');
            if (!File::isDirectory($directory_30A)) {
                File::makeDirectory($directory_30A, 0777, true, true);
            }

            $image_name_30A = 'pendata_spop_30A_' . Str::random(20) . '.png';
            $image_path_30A = $directory_30A . '/' . $image_name_30A;
            file_put_contents($image_path_30A, $decoded_image_30A);
            $this->data['30_tanda_tangan_petugas'] = $image_name_30A;

            $data = Spop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLama30A)) {
                    unlink($gambarLama30A);
                }
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit30A = false;
                $this->newTTD30A = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit30A = false;
            $this->alert('error', 'Tidak ada tanda tangan pendata yang diupload');
        }
    }

    public function simpan30B()
    {
        $gambarLama30B = Spop::find($this->dataId)->getOriginal()['30_tanda_tangan_pejabat'];
        $gambarLama30B = public_path('img/ttd/spop/pejabat/' . $gambarLama30B);

        if ($this->newTTD30B != null) {
            $data_uri_30B = $this->newTTD30B;
            $encoded_image_30B = explode(',', $data_uri_30B)[1];
            $decoded_image_30B = base64_decode($encoded_image_30B);

            $directory_30B = public_path('img/ttd/spop/pejabat');
            if (!File::isDirectory($directory_30B)) {
                File::makeDirectory($directory_30B, 0777, true, true);
            }

            $image_name_30B = 'ttd_pejabat_spop_30B_' . Str::random(20) . '.png';
            $image_path_30B = $directory_30B . '/' . $image_name_30B;
            file_put_contents($image_path_30B, $decoded_image_30B);
            $this->data['30_tanda_tangan_pejabat'] = $image_name_30B;

            $data = Spop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLama30B)) {
                    unlink($gambarLama30B);
                }
                $this->alert('success', 'Tanda tangan pejabat berhasil diperbarui');
                $this->edit30B = false;
                $this->newTTD30B = null;
            } else {
                $this->alert('error', 'Tanda tangan pejabat gagal diperbarui');
            }
        } else {
            $this->edit30B = false;
            $this->alert('error', 'Tidak ada tanda tangan pejabat yang diupload');
        }
    }

    public function simpanSket()
    {
        $gambarLamasket = Spop::find($this->dataId)->getOriginal()['sket_tanda_tangan'];
        $gambarLamasket = public_path('img/sket/' . $gambarLamasket);

        if ($this->newsket != null) {
            $data_uri_sket = $this->newsket;
            $encoded_image_sket = explode(',', $data_uri_sket)[1];
            $decoded_image_sket = base64_decode($encoded_image_sket);

            $directory_sket = public_path('img/sket');
            if (!File::isDirectory($directory_sket)) {
                File::makeDirectory($directory_sket, 0777, true, true);
            }

            $image_name_sket = 'sketsa_' . Str::random(20) . '.png';
            $image_path_sket = $directory_sket . '/' . $image_name_sket;
            file_put_contents($image_path_sket, $decoded_image_sket);
            $this->data['sket_tanda_tangan'] = $image_name_sket;
            $this->data['sket_base64'] = $data_uri_sket;

            $data = Spop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
                if (file_exists($gambarLamasket)) {
                    unlink($gambarLamasket);
                }
                $this->alert('success', 'Sket berhasil diperbarui');
                $this->editsket = false;
                $this->newsket = null;
            } else {
                $this->alert('error', 'Sket gagal diperbarui');
            }
        } else {
            $this->editsket = false;
            $this->alert('error', 'Tidak ada dket yang diupload');
        }
    }
}
