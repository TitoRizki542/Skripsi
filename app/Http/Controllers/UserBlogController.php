<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Paketwisata;


class UserBlogController extends Controller
{
    public function index()
    {
        $blog = Blog::get();


        return view('user.blog.index', compact(['blog']));
    }

    public function show($id)
    {
        $blog = Blog::where('id',$id)->first();
        $paketwis = Paketwisata::paginate(5);
        return view('user.blog.detail', compact(['blog','paketwis']));
    }
}
