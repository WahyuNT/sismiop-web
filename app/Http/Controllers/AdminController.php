<?php

namespace App\Http\Controllers;

use App\Models\Lspop;
use App\Models\Spop;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AdminController extends Controller
{
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        
        return view('pages.index', compact('user'));
    }

    public function dataSpop()
    {
        return view('pages.data-spop');
    }

    public function detailSpop($id)
    {
        $id = $id;
        $data = Spop::find($id);

        if (!$data) {
            return redirect('/data-spop');
        }
        return view('pages.detail-spop', compact('id'));
    }

    public function dataLspop()
    {
        return view('pages.data-lspop');
    }

    public function tambahSpop()
    {
        return view('pages.tambah-spop');
    }

    public function detailLspop($id)
    {
        $id = $id;
        $data = Lspop::find($id);

        if (!$data) {
            return redirect('/data-lspop');
        }
        return view('pages.detail-lspop', compact('id'));
    }

    public function tambahLspop()
    {
        return view('pages.tambah-lspop');
    }

    public function dataTerhapus()
    {
        return view('pages.data-terhapus');
    }
    public function detailTerhapus($id)
    {
        Lspop::find($id)->first();
        return view('pages.data-terhapus');
    }
}
