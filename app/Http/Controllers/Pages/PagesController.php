<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('auth.home');
    }

    public function create_surat()
    {
        return view('auth.surat');
    }

    public function edit_surat($kode)
    {
        $surat = Surat::find($kode);
        return view('auth.surat_edit',[
            'data' => $surat
        ]);

    }
}
