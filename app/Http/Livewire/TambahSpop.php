<?php

namespace App\Http\Livewire;

use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class TambahSpop extends Component
{
    use LivewireAlert;

    public $data = [];

    public function render()
    {
        return view('livewire.tambah-spop');
    }

    public function simpan()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $this->data['status'] = 'aktif';
        $this->data['user_id'] = $user->id;
        $data = Spop::create($this->data);
        if ($data) {
            $this->nullData();
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
