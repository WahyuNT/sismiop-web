<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use Livewire\Component;

class DetailLspop extends Component
{
    public $dataId;

    public $data = [];

    // public $isEdit;

    public function mount($id)
    {
        $this->dataId = $id;
    }

    public function render()
    {
        $lspop = null;

        $lspop = Lspop::find($this->dataId);
        $lspop = $lspop->toArray();
        $this->data = $lspop;

        return view('livewire.detail-lspop');
    }

    public function updateData()
    {
        $data = Lspop::find($this->dataId);
        $data->update($this->data);

        $data->save();
    }
}
