<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class DataAkun extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $role;
    public $confirmDelete;

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
            ->orderby('created_at', 'desc')
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

    public function confirmDelete($id)
    {
        $this->confirmDelete = $id;
    }

    public function batalDelete()
    {
        $this->confirmDelete = null;
    }

    public function tangguhkan($id)
    {
     
        $user = User::find($id);
        $user->update([
            'status' => 'tidak_aktif'
        ]);
        if ($user->save()) {
            $this->alert('success', 'Data berhasil ditangguhkan');

        } else {
            $this->alert('error', 'Data gagal ditangguhkan');
        }
    }
    public function aktifkan($id)
    {
        $user = User::find($id);
        $user->update([
            'status' => 'aktif'
        ]);

        if ($user->save()) {
            $this->alert('success', 'Data berhasil diaktifkan');

        } else {
            $this->alert('error', 'Data gagal diaktifkan');
        }
    }
    public function delete($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }

}
