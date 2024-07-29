<?php

namespace App\Http\Livewire;

use App\Models\Provinsi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataProvinsi extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;
    public $idEdit;
    public $inputData;
    public $add = false;


    public function render()
    {
        $data = Provinsi::orderby('created_at', 'desc')
            ->when($this->search, function ($query) {
                $query
                    ->where('NM_PROPINSI', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);

        if ($this->idEdit != null) {
            $inputData = Provinsi::find($this->idEdit);
        } else {
            $inputData = null;
        }
        $add = $this->add;


        return view('livewire.data-provinsi', compact('data', 'inputData', 'add'));
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPagination()
    {
        $this->resetPage();
    }
    public function confirmDelete($id)
    {
        $this->confirmDelete = $id;
    }

    public function batalDelete()
    {
        $this->confirmDelete = null;
    }
    public function delete($id)
    {
        $data = Provinsi::find($id);
        if ($data->delete()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    public function back()
    {
        $this->idEdit = null;
        $this->add = false;
        $this->inputData = null;
    }
    public function edit($id)
    {
        $this->idEdit = $id;
        $db = Provinsi::find($id);
        $this->inputData = $db->NM_PROPINSI;
    }
    public function update()
    {
        $this->validate([
            'inputData' => 'required'
        ]);

        $data = Provinsi::find($this->idEdit);
        $data->NM_PROPINSI = $this->inputData;
        if ($data->save()) {
            $this->alert('success', 'Data berhasil diubah');
            $this->idEdit = null;
        } else {
            $this->alert('error', 'Data gagal diubah');
        }
    }
    public function addTrue()
    {
        $this->add = true;
    }
    public function Simpan()
    {
        $this->validate([
            'inputData' => 'required'
        ]);

        $data = new Provinsi();
        $data->NM_PROPINSI = $this->inputData;
        if ($data->save()) {
            $this->alert('success', 'Data berhasil ditambahkan');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal ditambahkan');
        }
    }
}
