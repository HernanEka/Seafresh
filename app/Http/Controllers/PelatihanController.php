<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihan = Pelatihan::lastet()->get();
        return view('Pelatihan', compact('pelatihan'));
    }

    public function data()
    {
        $pelatihan = Pelatihan::latest()->get();
        return view('Admin.Data_Pelatihan', compact('pelatihan'));
    }
    public function input(Request $request)
    {
        $pelatihan = new Pelatihan();

        $pelatihan->judul = $request->judul;
        $pelatihan->deskripsi = $request->deskripsi;
        $pelatihan->kuota = $request->kuota;
        $pelatihan->batas_daftar = $request->pendaftaran;
        $pelatihan->tanggal = $request->tanggal;

        $pelatihan->save();
        return redirect('/admin');
    }

    public function detail($id)
    {
        $pelatihan = Pelatihan::find($id);
        return view('Admin.Detail_Pelatihan', compact('pelatihan'));
    }

    public function update(Request $request,$id)
    {
        $pelatihan = Pelatihan::find($id);

        $pelatihan->judul = $request->judul;
        $pelatihan->deskripsi = $request->deskripsi;
        $pelatihan->kuota = $request->kuota;
        $pelatihan->batas_daftar = $request->pendaftaran;
        $pelatihan->tanggal = $request->tanggal;

        $pelatihan->save();
        return back();
    }

    public function delete($id)
    {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();

        return back();
    }
}
