<?php

namespace App\Http\Livewire;

use App\Models\Berita;
use Livewire\Component;

class BeritaHome extends Component
{
    public function render()
    {
        $data = Berita::where('status', 'aktif')->latest()->get();
        return view('livewire.berita-home', compact('data'));
    }
}
