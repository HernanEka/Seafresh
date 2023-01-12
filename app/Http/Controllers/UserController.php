<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function daftar(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        };
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();


            if(auth()->user()->roles == 'admin'){
                return redirect()->intended('/admin');
            }

            // return redirect()->intended('/');
        };
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function pesan(Request $request)
    {
        $pesan = new Pesan();

        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        return back()->with(['pesan' => 'Pesan Berhasil Dikirim']);
    }

    public function data_pesan()
    {
        $pesan = Pesan::latest()->get();

        return view('Admin.Data_Pesan', compact('pesan'));
    }
}
