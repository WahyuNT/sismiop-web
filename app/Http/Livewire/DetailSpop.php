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
        if ($this->newTTD28 != null) {
            $this->emit('dataUpdated');
            $data = Spop::find($this->dataId);
            $this->data['28_tanda_tangan'] = $this->newTTD28;
            $data->update($this->data);

            if ($data->save()) {
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit28 = false;
                $this->newTTD28 = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit28 = false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }

    public function simpan30A()
    {
        

        if ($this->newTTD30A != null) {
            $this->emit('dataUpdated');
            $data = Spop::find($this->dataId);
            $this->data['30_tanda_tangan_petugas'] = $this->newTTD30A;
            $data->update($this->data);

            if ($data->save()) {
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit30A = false;
                $this->newTTD30A = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit30A = false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }

    public function simpan30B()
    {
     

        if ($this->newTTD30B != null) {
            $this->emit('dataUpdated');
            $data = Spop::find($this->dataId);
            $this->data['30_tanda_tangan_pejabat'] = $this->newTTD30B;
            $data->update($this->data);

            if ($data->save()) {
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit30B = false;
                $this->newTTD30B = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit30B = false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }

    public function simpanSket()
    {


        if ($this->newsket != null) {
            $this->data['sket_base64'] = $this->newsket;

            $data = Spop::find($this->dataId);
            $data->update($this->data);

            if ($data->save()) {
    
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
