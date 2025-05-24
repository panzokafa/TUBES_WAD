<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffRegisterController extends Controller
{
    public function index()
    {
        return view('Backend.Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_staff' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'password' => 'required|min:6',
        ]);

        Staff::create([
            'nama_staff' => $request->nama_staff,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('staff.login.page')->with('success', 'Registrasi berhasil.');
    }
}
