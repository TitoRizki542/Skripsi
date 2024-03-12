<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        $validateData = $request->validate([
            'nama'=>'required|max:30',
            'email'=>'required|email',
            'username'=>'required|max:10',
            'password'=>'required|min:8',
            'alamat'=>'required',
            'nomor_hp'=>'required|min:12|max:14',
            'jenis_kelamin'=>'required',
        ]);

        User::create($validateData);

        return redirect()->route('login')->with('success','Berhasil Register, Silahkan Login!');
    }
}

