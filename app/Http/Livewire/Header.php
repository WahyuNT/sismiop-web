<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class Header extends Component
{
    public function render()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        
        return view('livewire.header', compact('user'));
    }
}
