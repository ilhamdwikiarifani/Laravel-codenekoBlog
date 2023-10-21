<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = Kategori::search($request->search)->paginate(3);
        return view('backEnd.kategori.index', compact('kategori'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kategori $kategori)
    {
        $request->validate([
            'title' => 'required|unique:kategoris,title,slug',
        ]);

        $cekUnique = Kategori::where('title', $kategori->title)->count();

        if ($cekUnique > 0) {
            redirect()->back()->with('error', 'The title has already been taken.');
        } else {
            Kategori::create([
                'title' => Str::title($request->title),
                'published_at' => now()
            ]);

            return redirect('kategori')->with('success', 'Berhasil Menambahkan data Kategori');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('backEnd.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('backEnd.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'title' => 'required|unique:kategoris,title,slug'
        ]);

        $kategori->title = Str::title($request->title);

        $kategori->update();

        return redirect('kategori')->with('success', 'Berhasil Mengupdate data Kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {

        $cekFound = Post::where('kategoriId', $kategori->id)->count();

        if ($cekFound == 0) {
            $kategori->delete();
            return redirect('kategori')->with('success', 'Berhasil Menghapus Kategori');
        } else {
            return redirect()->back()->with('error', 'Terdapat data yang terkait !');
        }
    }
}
