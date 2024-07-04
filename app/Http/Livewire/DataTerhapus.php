<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataTerhapus extends Component
{
    use LivewireAlert;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;

    public function render()
    {
        $lspop = Lspop::where('status', 'tidak_aktif')
            ->when($this->search, function ($query) {
                $query
                    ->where('no_formulir', 'like', '%' . $this->search . '%')
                    ->orWhere('31_nama_jelas_petugas', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);

        return view('livewire.data-terhapus', compact('lspop'));
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
        $lspop = Spop::find($id);
        $lspop->delete();
        if ($lspop->delete()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
}
