<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Destinasi;
use App\Models\Paketwisata;


class DashboardController extends Controller
{
    public function index()
    {
        $countPaketwisata = Paketwisata::count();
        $countPesanan = Pesanan::count();
        $countBlog = Blog::count();
        $countUser = User::count();

        // return view('admin.dashboard.index');
        return view('admin.dashboard.index', compact(['countPaketwisata','countPesanan','countBlog','countUser']));
    }
}
