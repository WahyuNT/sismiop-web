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
            $gambarLama28 = $spopArray['28_tanda_tangan'];
            $gambarLama28 = public_path('img/ttd/spop/pernyataan/' . $gambarLama28);

            $gambarLama30A = $spopArray['30_tanda_tangan_petugas'];
            $gambarLama30A = public_path('img/ttd/spop/petugas/' . $gambarLama30A);

            $gambarLama30B = $spopArray['30_tanda_tangan_pejabat'];
            $gambarLama30B = public_path('img/ttd/spop/pejabat/' . $gambarLama30B);

            $gambarLamasket = $spopArray['sket_tanda_tangan'];
            $gambarLamasket = public_path('img/sket/' . $gambarLamasket);

            if (file_exists($gambarLama28)) {
                unlink($gambarLama28);
            }
            if (file_exists($gambarLama30A)) {
                unlink($gambarLama30A);
            }
            if (file_exists($gambarLama30B)) {
                unlink($gambarLama30B);
            }
            if (file_exists($gambarLamasket)) {
                unlink($gambarLamasket);
            }

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
