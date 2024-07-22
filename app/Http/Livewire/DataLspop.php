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
    public $jenisTransaksi;

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
            ->when($this->jenisTransaksi, function ($query) {
                $query
                    ->where('1_jenis_transaksi', $this->jenisTransaksi);
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
    public function updatingjenisTransaksi()
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

    public function deletePermanen($id)
    {
        $lspop = Lspop::find($id);
        $lspopArray = $lspop->toArray();
        // if ($lspop->delete()) {
        //     $gambarLama60 = $lspopArray['60_tanda_tangan'];
        //     $gambarLama60 = public_path('img/ttd/lspop/pejabat/' . $gambarLama60);

        //     $gambarLama56 = $lspopArray['56_tanda_tangan'];
        //     $gambarLama56 = public_path('img/ttd/lspop/pendata/' . $gambarLama56);

        //     if (file_exists($gambarLama60)) {
        //         unlink($gambarLama60);
        //     }
        //     if (file_exists($gambarLama56)) {
        //         unlink($gambarLama56);
        //     }

        //     $this->alert('success', 'Data berhasil dihapus');
        // } else {
        //     $this->alert('error', 'Data gagal dihapus');
        // }
    }
}
