<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{

    public function index()
    {
        $pendaftaran = Pendaftaran::where('user_id','=',auth()->user()->id)->get();
        $pelatihan = Pelatihan::all();

        return view('Daftar_Pelatihan',compact('pendaftaran', 'pelatihan'));
    }

    public function daftar($id)
    {
        $daftar = new Pendaftaran();

        $daftar->user_id = auth()->user()->id;
        $daftar->pelatihan_id = $id;

        $daftar->save();

        $pelatihan = Pelatihan::find($id);
        $pelatihan->pendaftar = $pelatihan->pendaftar + 1;
        $pelatihan->save();

        return redirect('/daftar_pelatihan');
    }

    public function data()
    {
        $pendaftaran = Pendaftaran::all();
        return view('Admin.Data_Pendaftar', compact('pendaftaran'));
    }

    public function ubah(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->status = $request->status;
        $pendaftaran->save();

        return back();
    }
}
