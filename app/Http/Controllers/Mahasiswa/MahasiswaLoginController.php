<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

class MahasiswaLoginController extends Controller
{
    public function index()
    {
        return view('Frontend.auth.login');
    }

    public function login(Request $request)
    {
        $mahasiswa = Mahasiswa::where('email', $request->email)->first();

        if ($mahasiswa && Hash::check($request->password, $mahasiswa->password)) {
            session(['mahasiswa_id' => $mahasiswa->id]);
            return redirect()->route('mahasiswa.dashboard'); //nanti bikin
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        session()->forget('mahasiswa_id');
        return redirect()->route('mahasiswa.login.page');
    }
}
