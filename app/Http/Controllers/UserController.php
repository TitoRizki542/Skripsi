<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function index()
    {
       $user = User::get()->all();

       return view('admin.user.indexuser', compact('user'));
    }

    public function create() {

        return view('admin.user.createuser');
    }

    public function store(Request $request){

        dd($request);
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

        return redirect()->route('pengguna.index')->with('success','User Berhasil Ditambahkan!');
    }
}
