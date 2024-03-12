<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
       $admin = Admin::get()->all();

       return view('admin.user.admin', compact('admin'));
    }
}
