<?php
namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffLoginController extends Controller
{
    public function index()
    {
        return view('Backend.Auth.login');
    }

    public function login(Request $request)
    {
        $staff = Staff::where('email', $request->email)->first();

        if ($staff && Hash::check($request->password, $staff->password)) {
            session(['staff_id' => $staff->id]);
            return redirect()->route('staff.dashboard'); // Buat route ini nanti
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        session()->forget('staff_id');
        return redirect()->route('staff.login.page');
    }
}
