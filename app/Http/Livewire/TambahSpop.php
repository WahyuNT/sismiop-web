<?php

namespace App\Http\Livewire;

use App\Models\Dati2;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use App\Models\Spop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class TambahSpop extends Component
{
    use LivewireAlert;

    public $data = [];

    public function render()
    {
        $provinsi = Provinsi::all();
        $kecamatan = Kecamatan::all();
        $dati2 = Dati2::all();
        $nourut = Spop::latest()->first();
        $nourut = intval($nourut->{'2_nop_urut'}) + 1;


        $this->data = [
            '2_nop_urut' => $nourut,
            '2_nop_provinsi' => '83',
        ];

        return view('livewire.tambah-spop', compact('provinsi', 'kecamatan', 'dati2', 'nourut'));
    }

    public function simpan()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $date = date('Y-m-d');

        $this->data['status'] = 'aktif';
        $this->data['user_id'] = $user->id;
        $this->data['29_tanggal_petugas'] = $date;

        $data = Spop::create($this->data);
        if ($data) {
            $this->nullData();
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
