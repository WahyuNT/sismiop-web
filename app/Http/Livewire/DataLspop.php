<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataLspop extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;

    public function render()
    {
        $confirmDelete = $this->confirmDelete;
        $lspop = Lspop::where('status', 'aktif')
            ->when($this->search, function ($query) {
                $query
                    ->where('no_formulir', 'like', '%' . $this->search . '%')
                    ->orWhere('57_nama_jelas', 'like', '%' . $this->search . '%')
                    ->orWhere('59_tanggal_penelitian', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->pagination);
        return view('livewire.data-lspop', compact('lspop', 'confirmDelete'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPagination()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $lspop = Lspop::find($id);
        $lspop->status = 'tidak_aktif';
        if ($lspop->save()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }

    public function confirmDelete($id)
    {
        $this->confirmDelete = $id;
    }

    public function batalDelete()
    {
        $this->confirmDelete = null;
    }
}
