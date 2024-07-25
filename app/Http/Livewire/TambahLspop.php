<?php

namespace App\Http\Livewire;

use App\Models\Lspop;
use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tymon\JWTAuth\Facades\JWTAuth;

class TambahLspop extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $data = [];

    public function render()
    {
        return view('livewire.tambah-lspop');
    }

    public function simpan()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $this->data['status'] = 'aktif';
        $this->data['user_id'] = $user->id;
        $data = Lspop::create($this->data);

        if ($data) {
            $this->nullData();
            $this->dispatchBrowserEvent('data-saved');
            $this->alert('success', 'Data berhasil disimpan');
        } else {
            $this->alert('error', 'Data gagal disimpan');
        }
    }

    public function nullData()
    {
        $this->data = [];
    }
}
