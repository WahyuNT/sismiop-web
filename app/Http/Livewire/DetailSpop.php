<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DetailSpop extends Component
{
    use LivewireAlert;

    public $dataId;
    public $disabled = 'disabled';
    public $data = [];
    public $isEdit = false;

    public function mount($id)
    {
        $this->dataId = $id;
    }

    public function render()
    {
        $spop = Spop::find($this->dataId);
        $spop = $spop->toArray();
        $this->data = $spop;
        $placeholder = 'Masukkan Data';

        $disabled = $this->disabled;
        $isEdit = $this->isEdit;

        return view('livewire.detail-spop', compact('spop', 'placeholder', 'disabled', 'isEdit'));
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
}
