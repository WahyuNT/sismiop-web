<?php

namespace App\Http\Livewire;

use App\Models\Kecamatan;
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


    
    public function render()
    {
        $data = Kecamatan::orderby('NM_KECAMATAN', 'asc')
        ->when($this->search, function ($query) {
            $query
                ->where('NM_KECAMATAN', 'like', '%' . $this->search . '%');
        })
        ->paginate($this->pagination);

        return view('livewire.data-kecamatan', compact('data'));
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
}
