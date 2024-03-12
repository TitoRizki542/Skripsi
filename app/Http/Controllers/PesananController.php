<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesanan;
use App\Models\Paketwisata;
use App\Models\Pengunjung;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::orderBy('id', 'ASC')->get();

        return view('admin.pesanan.daftarpesanan', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly` created resource in storage.
     */
    public function store(Request $request,$id)
    {
        // dd($request->all());
        // dd($id);
        // dd(auth()->user()->id);
        $validateData = $request->validate([
            'tanggal_pesanan'=>'required',
            'tanggal_kedatangan'=>'required|date|after:tanggal_pesanan',
            'jam_kedatangan'=>'required',
            'jumlah_orang'=>'required',
            'total_harga' => 'required',

        ]);

        $validateData['paketwisata_id'] = $id;
        $validateData['users_id'] = $id;

        Pesanan::create($validateData);

        return redirect()->route('wisata.index')->with(['success' => 'Pesanan berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
