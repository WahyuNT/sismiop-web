<?php

namespace App\Http\Livewire;

use App\Models\Dati2;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataKecamatan extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;
    public $idEdit;

    public $NM_KECAMATAN;
    public $KD_DATI2;
    public $KD_PROPINSI;
    public $add = false;


    public function render()
    {
        $data = Kecamatan::orderby('created_at', 'desc')
            ->when($this->search, function ($query) {
                $query
                    ->where('NM_KECAMATAN', 'like', '%' . $this->search . '%')
                    ->orWhereHas('provinsi', function ($query) {
                        $query->where('NM_PROPINSI', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('dati2', function ($query) {
                        $query->where('NM_DATI2', 'like', '%' . $this->search . '%');
                    });
            })
            ->paginate($this->pagination);

        $provinsi = Provinsi::all();
        $dati2 = Dati2::all();

        return view('livewire.data-kecamatan', compact('data', 'provinsi', 'dati2'));
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
        $data = Kecamatan::find($id);
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
        $this->KD_DATI2 = null;
        $this->NM_KECAMATAN = null;
    }
    public function edit($id)
    {

        $this->idEdit = $id;
        $db = Kecamatan::find($id);

        $this->KD_PROPINSI = $db->KD_PROPINSI;
        $this->KD_DATI2 = $db->KD_DATI2;
        $this->NM_KECAMATAN = $db->NM_KECAMATAN;
    }
    public function update()
    {
        $this->validate([
            'NM_KECAMATAN' => 'required',
            'KD_DATI2' => 'required',
            'KD_PROPINSI' => 'required'
        ]);

        $data = Kecamatan::find($this->idEdit);
        $data->NM_KECAMATAN = $this->NM_KECAMATAN;
        $data->KD_DATI2 = $this->KD_DATI2;
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
            'NM_KECAMATAN' => 'required',
            'KD_DATI2' => 'required',
            'KD_PROPINSI' => 'required'
        ]);

        $data = new Kecamatan();
        $data->NM_KECAMATAN = $this->NM_KECAMATAN;
        $data->KD_DATI2 = $this->KD_DATI2;
        $data->KD_PROPINSI = $this->KD_PROPINSI;

        if ($data->save()) {
            $this->alert('success', 'Data berhasil ditambahkan');
            $this->back();
        } else {
            $this->alert('error', 'Data gagal ditambahkan');
        }
    }
}
