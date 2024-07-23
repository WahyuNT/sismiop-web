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

        $dataTtd56 = $lspop->{"56_tanda_tangan"};
        $dataTtd60 = $lspop->{"60_tanda_tangan"};

        return view('livewire.detail-lspop', compact('lspop', 'dataTtd56', 'dataTtd60'));
    }

    public function updateData()
    {


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
        if ($this->newTTD60 != null) {
            $this->emit('dataUpdated');
            $data = Lspop::find($this->dataId);
            $this->data['60_tanda_tangan'] = $this->newTTD60;
            $data->update($this->data);

            if ($data->save()) {
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit60 = false;
                $this->newTTD60 = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit60 = false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }

    public function simpan56()
    {
        if ($this->newTTD56 != null) {
            $this->emit('dataUpdated');
            $data = Lspop::find($this->dataId);
            $this->data['56_tanda_tangan'] = $this->newTTD56;
            $data->update($this->data);

            if ($data->save()) {
                $this->alert('success', 'Tanda tangan pendata berhasil diperbarui');
                $this->edit56 = false;
                $this->newTTD56 = null;
            } else {
                $this->alert('error', 'Tanda tangan pendata gagal diperbarui');
            }
        } else {
            $this->edit56 = false;
            $this->alert('error', 'Tidak ada tanda tangan petugas yang diupload');
        }
    }
}
