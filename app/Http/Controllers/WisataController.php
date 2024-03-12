<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paketwisata;

class WisataController extends Controller
{
    public function index()
    {
        $paketwisata = Paketwisata::get();

        return view('user.wisata.index', compact('paketwisata'));
    }

    public function show($id)
    {
        $paketwisata = Paketwisata::where('id',$id)->first();
        // dd($paketwisata);
        return view('user.wisata.paket', compact('paketwisata'));
    }

}
