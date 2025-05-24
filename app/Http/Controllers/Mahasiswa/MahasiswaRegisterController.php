<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

class MahasiswaRegisterController extends Controller
{
    public function index()
    {
        return view('Frontend.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama_mahasiswa' => 'required',
            'email' => 'required|email|unique:mahasiswas',
            'password' => 'required|min:6',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('mahasiswa.login.page')->with('success', 'Registrasi berhasil.');
    }
}

