<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Livewire\Component;

class TambahSpop extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.tambah-spop');
    }

    public function simpan()
    {
        Spop::create($this->data);
        $this->emit('simpan');
        $this->nullData();
    }

    public function nullData()
    {
        $this->data = [];
    }
}
