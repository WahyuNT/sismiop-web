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
    public $lspopEdit = false;
    public $spopEdit = false;
    public $confirmDeleteLspop;
    public $confirmDeleteSpop;

    public function render()
    {
        $lspop = Lspop::where('status', 'tidak_aktif')
            ->when($this->search, function ($query) {
                $query
                    ->where('no_formulir', 'like', '%' . $this->search . '%')
                    ->orWhere('57_nama_jelas', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);

        $spop = Spop::where('status', 'tidak_aktif')
            ->when($this->search, function ($query) {
                $query
                    ->where('no_formulir', 'like', '%' . $this->search . '%')
                    ->orWhere('31_nama_jelas_petugas', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);

        return view('livewire.data-terhapus', compact('lspop', 'spop'));
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
    public function confirmDeleteLspop($id)
    {
        $this->confirmDeleteLspop = $id;
    }
    public function confirmDeleteSpop($id)
    {
        $this->confirmDeleteSpop = $id;
    }

    public function editLspop()
    {
        $this->lspopEdit = true;
    }

    public function editSpop()
    {
        $this->spopEdit = true;
    }

    public function back()
    {
        $this->lspopEdit = false;
        $this->spopEdit = false;
    }

    public function batalDelete(){
        $this->confirmDeleteLspop = null;
        $this->confirmDeleteSpop = null;
    }
    public function deletePermanenSpop($id)
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

    public function deletePermanenLspop($id)
    {
        $lspop = Lspop::find($id);
        $lspopArray = $lspop->toArray();
        if ($lspop->delete()) {
            $gambarLama60 = $lspopArray['60_tanda_tangan'];
            $gambarLama60 = public_path('img/ttd/lspop/pejabat/' . $gambarLama60);

            $gambarLama56 = $lspopArray['56_tanda_tangan'];
            $gambarLama56 = public_path('img/ttd/lspop/pendata/' . $gambarLama56);

            if (file_exists($gambarLama60)) {
                unlink($gambarLama60);
            }
            if (file_exists($gambarLama56)) {
                unlink($gambarLama56);
            }

            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    public function pulihkanLspop($id){
        $lspop = Lspop::find($id);
        $lspop->status = 'aktif';
        if($lspop->save()){
            $this->alert('success', 'Data berhasil dipulihkan');
        }else{
            $this->alert('error', 'Data gagal dipulihkan');
        }
    }

    public function pulihkanSpop($id){
        $spop = Spop::find($id);
        $spop->status = 'aktif';
        if($spop->save()){
            $this->alert('success', 'Data berhasil dipulihkan');
        }else{
            $this->alert('error', 'Data gagal dipulihkan');
        }
    }
}
