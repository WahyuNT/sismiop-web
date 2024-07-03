<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Livewire\Component;

class DetailSpop extends Component
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
        $spop = null;

        $spop = Spop::find($this->dataId);
        $spop = $spop->toArray();
        $this->data = $spop;
        $placeholder = "Masukkan Data";

        return view('livewire.detail-spop', compact('spop', 'placeholder'));
    }

    public function updateData()
    {
        $data = Spop::find($this->dataId);
        $data->update($this->data);

        $data->save();
    }
}
