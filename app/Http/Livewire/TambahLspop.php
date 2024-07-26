<?php

namespace App\Http\Livewire;

use App\Models\Dati2;
use App\Models\Kecamatan;
use App\Models\Lspop;
use App\Models\Provinsi;
use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tymon\JWTAuth\Facades\JWTAuth;

class TambahLspop extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $data = [];


    public function render()
    {
        $provinsi = Provinsi::all();
        $kecamatan = Kecamatan::all();
        $dati2 = Dati2::all();
        $nourut = Lspop::latest()->first();
        $nourut = intval($nourut->{'2_nop_no_urut'}) + 1;

        $this->data = [
            '2_nop_no_urut' => $nourut,
            '2_nop_provinsi' => '83',
        ];

        return view('livewire.tambah-lspop', compact('provinsi', 'kecamatan', 'dati2', 'nourut'));
    }

    public function simpan()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $this->data['status'] = 'aktif';
        $this->data['user_id'] = $user->id;
        $data = Lspop::create($this->data);

        if ($data) {
            $this->nullData();
            $this->dispatchBrowserEvent('data-saved');
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
