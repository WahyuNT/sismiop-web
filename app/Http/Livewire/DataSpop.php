<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Livewire\Component;
use Livewire\WithPagination;

class DataSpop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;

    public function render()
    {
        $spop = Spop::when($this->search, function ($query) {
            $query->where('no_formulir', 'like', '%' . $this->search . '%')
                ->orWhere('31_nama_jelas_petugas', 'like', '%' . $this->search . '%');
        })->paginate($this->pagination);
        return view('livewire.data-spop', compact('spop'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingPagination()
    {
        $this->resetPage();
    }
}
