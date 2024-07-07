<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
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
        $data = Lspop::find($this->dataId);
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
    }

    public function edit60()
    {
        $this->edit60 = true;
    }
    public function cancelEdit60()
    {
        $this->edit60 = false;
    }

}
