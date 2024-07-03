<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use Livewire\Component;

class TambahLspop extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.tambah-lspop');
    }

    public function simpan()
    {
        Lspop::create($this->data);
        $this->emit('simpan');
        $this->nullData();
    }

    public function nullData()
    {
        $this->data = [];
    }
}
