<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Profile extends Component
{
    use LivewireAlert;

    public $dataAkun;
    public $user;

    public function mount()
    {
        $this->user = JWTAuth::toUser(JWTAuth::getToken());

        $this->dataAkun = [
            'username' => $this->user['username'],
            'email' => $this->user['email'],
            
        ];
    }

    public function render()
    {

        // dd($this->user['id']);
        return view('livewire.profile');
    }

    public function update()
    {
        $data = User::find($this->user['id']);
        $data->update($this->dataAkun);

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diupdate');
        } else {
            $this->alert('error', 'Data gagal diupdate');
        }
    }
}
