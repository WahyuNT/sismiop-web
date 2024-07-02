<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dataSpop()
    {
        return view('pages.data-spop');
    }
    public function dataLspop()
    {
        return view('pages.data-lspop');
    }
    public function tambahSpop()
    {
        return view('pages.tambah-spop');
    }
    public function tambahLspop()
    {
        return view('pages.tambah-lspop');
    }
}
