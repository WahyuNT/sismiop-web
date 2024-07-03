<?php

namespace App\Http\Controllers;

use App\Models\Lspop;
use App\Models\Spop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.index');
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
}
