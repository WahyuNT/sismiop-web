<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use Livewire\Component;

class DataLspop extends Component
{
    public function render()
    {
        $lspop = Lspop::all();
        return view('livewire.data-lspop', compact('lspop'));
    }
}
