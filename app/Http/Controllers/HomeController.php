<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paketwisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()

    {
        $user = User::select('nama');
        return view('user.index', compact('user'));

    }
    public function testing()

    {
        return view('auth.test-login-new');
    }
}
