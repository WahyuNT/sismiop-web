<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UbahPassword extends Component
{
    use LivewireAlert;
    public $password;
    public $password_confirm;

    public $user;

    public function mount()
    {
        $this->user = User::where('username', session()->get('username'))->first();
    }

    protected $rules = [
        'password' => 'required',
        'password_confirm' => 'required|same:password',
    ];

    public function render()
    {
        return view('livewire.ubah-password');
    }
    public function update()
    {
        $this->validate();
        $data = User::find($this->user['id']);
        $data->password = bcrypt($this->password);

        if ($data->update()) {
            $this->reset('password', 'password_confirm');
            $this->alert('success', 'Data berhasil diupdate');

        } else {
            $this->alert('error', 'Data gagal diupdate');
        }
    }
}
