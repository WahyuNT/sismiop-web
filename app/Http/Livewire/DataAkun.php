<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataAkun extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $role;

    public function render()
    {
        $data = User::when($this->search, function ($query) {
            $query
                ->where('username', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        })
            ->when($this->role, function ($query) {
                $query
                    ->where('role_id', $this->role);
            })
            ->paginate($this->pagination);
        return view('livewire.data-akun', compact('data'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPagination()
    {
        $this->resetPage();
    }

    public function updatingRole()
    {
        $this->resetPage();
    }
}
