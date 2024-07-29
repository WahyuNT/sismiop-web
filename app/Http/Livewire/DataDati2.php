<?php

namespace App\Http\Livewire;

use App\Models\Dati2;
use App\Models\Provinsi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataDati2 extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;
    public $idEdit;
    public $NM_DATI2;
    public $KD_PROPINSI;
    public $add = false;


    public function render()
    {
        $data = Dati2::orderby('created_at', 'desc')
            ->when($this->search, function ($query) {
                $query
                    ->where('NM_DATI2', 'like', '%' . $this->search . '%')
                    ->orWhereHas('provinsi', function ($query) {
                        $query->where('NM_PROPINSI', 'like', '%' . $this->search . '%');
                    });
            })
            ->paginate($this->pagination);
   
            $provinsi = Provinsi::all();
        return view('livewire.data-dati2', compact('data', 'provinsi'));
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
        $data = Dati2::find($id);
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
        $this->KD_PROPINSI = null;
        $this->NM_DATI2 = null;
    }
    public function edit($id)
    {

        $this->idEdit = $id;
        $db = Dati2::find($id);

        $this->KD_PROPINSI = $db->KD_PROPINSI;
        $this->NM_DATI2 = $db->NM_DATI2;
    }
    public function update()
    {
        $this->validate([
            'NM_DATI2' => 'required',
            'KD_PROPINSI' => 'required'
        ]);

        $data = Dati2::find($this->idEdit);
        $data->NM_DATI2 = $this->NM_DATI2;
        $data->KD_PROPINSI = $this->KD_PROPINSI;
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
    public function simpan()
    {
        $this->validate([
            'NM_DATI2' => 'required',
            'KD_PROPINSI' => 'required'
        ]);

        $data = new Dati2();
        $data->NM_DATI2 = $this->NM_DATI2;
        $data->KD_PROPINSI = $this->KD_PROPINSI;

        if ($data->save()) {
            $this->alert('success', 'Data berhasil ditambahkan');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal ditambahkan');
        }
    }
}
