<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Blog::orderBy('id', 'ASC')->get();


        return view('admin.blog.index', compact('blog'));
    }


    public function create()
    {
        return view('admin.blog.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'judul'=>'required',
            'kutipan'=>'required',
            'deskripsi'=>'required|max:1000',
            'gambar'=>'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('gambar-blog');
        }

        Blog::create($validateData);

        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $blog  = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'judul'=>'required',
            'kutipan'=>'required',
            'deskripsi'=>'required|max:1000',
            'gambar'=>'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('gambar-blog');
        }

        Blog::where('id', $id)->update($validateData);

    return redirect()->route('blog.index')->with('success', "Data berhasil diperbarui");
    }

    public function destroy(string $id)
    {

        $blog = Blog::findOrFail($id);

        if($blog->gambar){
            Storage::delete($blog->gambar);
        } $blog -> delete();

        return redirect()->route('blog.index')->with('success', "Data berhasil dihapus");
    }
}

