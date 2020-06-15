<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuratController extends Controller
{
    public function buat_surat(Request $request)
    {
        Surat::create([
            'user_created_id' => Auth::user()->id,
            'yth' => $request->yth,
            'dari' => $request->dari,
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'lampiran' => $request->lampiran,
            'tujuan' => $request->tujuan,
            'pesan' => $request->pesan,

        ]);
        return redirect()->route('get.home')->with('success_surat', 'Surat Disimpan Silahkan Tunggu Konfirmasi Atasan');
    }

    public function update(Request $request)
    {
        $surat = Surat::find($request->id);
        $surat->update([
            'user_created_id' => Auth::user()->id,
            'yth' => $request->yth,
            'dari' => $request->dari,
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'lampiran' => $request->lampiran,
            'tujuan' => $request->tujuan,
            'pesan' => $request->pesan,

        ]);

        return redirect()->route('get.home')->with('success_surat', 'Surat Berhasil Diperbarui');
    }

    public function get_surat_detail($kode)
    {
        $surat = Surat::find($kode);
        return $surat;

    }

    public function surat_test(Request $request)
    {

        if (!Hash::check($request->pass, Auth::user()->password)) {
            return response()->json([
                'message' => 'Password Anda Salah!!'
            ],500);
        } else {
            $surat = Surat::find($request->surat);

            $surat->update([
                'disetujui_oleh' => Auth::user()->name,
                'accepted_at' => now()
            ]);
        }
        return back()->with([
            'success' => 'Berhasil Memperbarui Akun !'
        ]);
    }

//        $surat = Surat::find($request->q);
//        return $surat;

}
