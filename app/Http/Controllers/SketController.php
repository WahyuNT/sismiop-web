<?php

namespace App\Http\Controllers;

use App\Models\Spop;
use Illuminate\Http\Request;

class SketController extends Controller
{
    public function show($id)
    {

        $sket = Spop::find($id);
        $sket64 = $sket->sket_tanda_tangan;

        return view('pages.edit-sket', compact('sket', 'sket64'));
    }
    public function store(Request $request)
    {

     
        $sket = Spop::find($request->id);
        $sket->sket_tanda_tangan = $request->sket_tanda_tangan;
        $sket->save();

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}
