<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Livewire\Component;

class DataSpop extends Component
{

    public function render()
    {
        // $spop = null;
        // if ($this->idSpop) {
        //     $spop = Spop::find($this->idSpop);
        //     $this->data = $spop->toArray();
        // }
        $spop = Spop::all();
        return view('livewire.data-spop', compact('spop'));
    }

    // public function edit($id)
    // {
    //     $this->idSpop = $id;
    //     $this->isEdit = true;
    // }
}
