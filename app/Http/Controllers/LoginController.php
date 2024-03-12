<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index')->with('success', 'Kamu Sudah Berhasil Login!');
        }
        if (Auth::guard('web')->attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->route('user.index')->with('success', 'Kamu Sudah Berhasil Login!');
        }

        return redirect()->route('login')->with(['failed' => 'Username atau Password tidak ditemukan!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index')->with('success','Kamu berhasil Logout!');
    }

}
