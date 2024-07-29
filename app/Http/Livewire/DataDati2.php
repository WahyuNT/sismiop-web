<?php

namespace App\Http\Livewire;

use App\Models\Dati2;
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


    public function render()
    {
        $data = Dati2::orderby('NM_DATI2', 'asc')
            ->when($this->search, function ($query) {
                $query
                    ->where('NM_DATI2', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);

        return view('livewire.data-dati2', compact('data'));
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
}
