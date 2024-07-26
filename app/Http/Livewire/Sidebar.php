<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class Sidebar extends Component
{
    public function render()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        return view('livewire.sidebar', compact('user'));
    }
}
