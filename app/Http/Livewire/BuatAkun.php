<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BuatAkun extends Component
{
    use LivewireAlert;
    public $dataAkun = [];


    public function render()
    {
        return view('livewire.buat-akun');
    }
    public function simpan()
    {
        $data = User::create($this->dataAkun);

        $data = new User();
        $data->username = $this->dataAkun['username'];
        $data->email = $this->dataAkun['email'];
        $data->role_id = $this->dataAkun['role_id'];
        $data->password = bcrypt($this->dataAkun['password']);

        if ($data) {

            $this->alert('success', 'Akun berhasil di buat');
        } else {
            $this->alert('error', 'Akun gagal di buat');
        }

        $this->reset('dataAkun');
    }
}
