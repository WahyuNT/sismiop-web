<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class Profile extends Component
{
    public function render()
    {
        
      
        return view('livewire.profile');
    }
}
