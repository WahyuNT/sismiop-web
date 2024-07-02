<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function daftarPajak()
    {
        return view('pages.daftar-pajak');
    }
}
