<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UbahDataAkun extends Component
{
    use LivewireAlert;
    public $dataAkun = [];
    public $userId;



    public function mount($id)
    {
        $this->userId = $id;
        $user = User::find($id);
        $this->dataAkun = [
            'username' => $user->username,
            'email' => $user->email,
            'role_id' => $user->role_id,
        ];
    }
    public function render()
    {

        return view('livewire.ubah-data-akun');
    }

    public function update()
    {
      
        $data = User::find($this->userId);
        $data->update($this->dataAkun);

        if ($data->save()) {
            $this->alert('success', 'Data berhasil diupdate');
        } else {
            $this->alert('error', 'Data gagal diupdate');
        }
    }
}
