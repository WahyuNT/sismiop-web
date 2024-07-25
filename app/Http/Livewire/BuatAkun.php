<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BuatAkun extends Component
{
    use LivewireAlert;
    public $dataAkun = [];


    protected $rules = [
        'dataAkun.username' => 'required|unique:users,username',
        'dataAkun.email' => 'email|unique:users,email',
        'dataAkun.role_id' => 'required',
    ];
    protected $messages = [
        'dataAkun.email.email' => 'Email harus berupa alamat email yang valid.',
        'dataAkun.email.unique' => 'Email sudah ada.',
        'dataAkun.username.unique' => 'Username sudah ada.',
        'dataAkun.username.required' => 'Username harus di isi.',
        'dataAkun.role_id.required' => 'Role harus di isi.',

    ];

    public function render()
    {
        return view('livewire.buat-akun');
    }
    public function simpan()
    {

        $this->validate();
        $data = $this->dataAkun;
        $data['password'] = bcrypt($data['password']);

        $createdUser = User::create($data);

        if ($createdUser) {
            $this->alert('success', 'Akun berhasil dibuat');
        } else {
            $this->alert('error', 'Akun gagal dibuat');
        }

        $this->reset('dataAkun');
    }
}
