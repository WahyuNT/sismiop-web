<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TambahLspop extends Component
{
    use LivewireAlert;
    public $data = [];

    public function render()
    {
        return view('livewire.tambah-lspop');
    }

    public function simpan()
    {
        $data = Lspop::create($this->data);
        if ($data) {
            $this->nullData();
            $this->alert('success', 'Data berhasil disimpan');
        } else {
            $this->alert('error', 'Data gagal disimpan');
        }
    }


    public function nullData()
    {
        $this->data = [];
    }
}
