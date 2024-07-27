<?php

namespace App\Http\Livewire;

use App\Models\Berita as ModelsBerita;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Berita extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $pagination = 10;
    public $confirmDelete;

    public function render()
    {
        $data = ModelsBerita::orderby('created_at', 'desc')
            ->when($this->search, function ($query) {
                $query
                    ->where('judul', 'like', '%' . $this->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->pagination);
        return view('livewire.berita', compact('data'));
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
        $data = ModelsBerita::find($id);
        $gambarLama = $data->nama_gambar;
        if ($data->delete()) {
            Storage::disk('real_public')->delete('img/berita/' . $gambarLama);
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    public function aktifkan($id)
    {
        $data = ModelsBerita::find($id);
        $data->status = 'aktif';
        if ($data->save()) {
            $this->alert('success', 'Data berhasil diaktifkan');
        } else {
            $this->alert('error', 'Data gagal diaktifkan');
        }
    }
    public function nonaktifkan($id)
    {
        $data = ModelsBerita::find($id);
        $data->status = 'tidak_aktif';
        if ($data->save()) {
            $this->alert('success', 'Data berhasil diaktifkan');
        } else {
            $this->alert('error', 'Data gagal diaktifkan');
        }
    }
}
