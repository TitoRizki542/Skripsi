<?php

namespace App\Http\Controllers;

use App\Models\Paketwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paketwisata = Paketwisata::orderBy('id', 'ASC')->get();

        return view('admin.paketwisata.index', compact('paketwisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paketwisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_paket'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required|max:1000',
            'fasilitas'=>'required|max:1000',
            'alamat'=>'required',
            'thumbnail'=>'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($request->file('thumbnail')){
            $validateData['thumbnail'] = $request->file('thumbnail')->store('paketwisata-image');
        }

        Paketwisata::create($validateData);

        // dd($validateData);
        return redirect()->route('paketwisata.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $paketwisata  = Paketwisata::find($id);

        return view('admin.paketwisata.edit', compact('paketwisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nama_paket'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required|max:1000',
            'fasilitas'=>'required|max:1000',
            'alamat'=>'required',
            'thumbnail'=>'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($request->file('thumbnail')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['thumbnail'] = $request->file('thumbnail')->store('paketwisata-image');
        }

        Paketwisata::where('id', $id)->update($validateData);

        return redirect()->route('paketwisata.index')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paketwisata = Paketwisata::findOrFail($id);

        if($paketwisata->thumbnail){
            Storage::delete($paketwisata->thumbnail);
        } $paketwisata -> delete();

        return redirect()->route('paketwisata.index')->with('success', "Data berhasil dihapus");
    }
}
