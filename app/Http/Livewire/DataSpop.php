<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class DataSpop extends Component
{
    use LivewireAlert;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;
    public $jenisTransaksi;

    public function render()
    {
        $confirmDelete = $this->confirmDelete;
        $spop = Spop::where('status', 'aktif')
            ->when($this->search, function ($query) {
                $query
                    ->where('no_formulir', 'like', '%' . $this->search . '%')
                    ->orWhere('31_nama_jelas_petugas', 'like', '%' . $this->search . '%');
            })
            ->when($this->jenisTransaksi, function ($query) {
                $query
                    ->where('1_jenis_transaksi', 'like', '%' . $this->jenisTransaksi . '%');
            })
            ->orderby('created_at', 'desc')
            ->paginate($this->pagination);

        return view('livewire.data-spop', compact('spop', 'confirmDelete'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPagination()
    {
        $this->resetPage();
    }

    public function updatingjenisTransaksi()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $spop = Spop::find($id);
        $spop->status = 'tidak_aktif';
        if ($spop->save()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }

    public function deletePermanen($id)
    {
        $spop = Spop::find($id);
        $spopArray = $spop->toArray();
        if ($spop->delete()) {
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
