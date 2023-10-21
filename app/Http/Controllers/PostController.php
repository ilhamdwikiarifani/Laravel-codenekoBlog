<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $post = Post::with('user', 'kategori', 'status')->latest()->get();
        return view('backEnd.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Kategori $kategori)
    {
        $kategori = Kategori::latest()->get();
        $status = Status::latest()->get();
        return view('backEnd.post.create', compact('kategori', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kategoriId' => 'required',
            'statusId' => 'required',
            'title' => 'required|unique:posts,title,slug',
            'foto' => 'image|max:2048|mimes:png,jpg,jpeg,webp'
        ]);


        $filename = now()->timestamp . '.' . $request->foto->extension();

        $validate['userId'] = Auth::user()->id;
        $validate['title'] = $request->title;
        $validate['excerpt'] = strip_tags($request->body);
        $validate['body'] = $request->body;
        $validate['foto'] = $request->file('foto')->storeAs('post', $filename);
        $validate['published_at'] = now();


        Post::create($validate);

        return redirect('post')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('backEnd.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $kategori = Kategori::latest()->get();
        $status = Status::latest()->get();
        return view('backEnd.post.edit', compact('post', 'kategori', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'kategoriId' => 'required',
            'statusId' => 'required',
            'foto' => 'image|max:2048|mimes:png,jpg,jpeg,webp',
        ]);


        if ($request->file('foto')) {
            if ($request->foto_lama) {
                Storage::delete($request->foto_lama);
            }
            $filename = now()->timestamp . '.' . $request->foto->extension();
            $validate['foto'] = $request->file('foto')->storeAs('post', $filename);
        } else {
            $validate['foto'] = $request->foto_lama;
        }


        $validate['title'] = $request->title;
        $validate['excerpt'] = strip_tags($request->body);
        $validate['body'] = $request->body;

        $post->update($validate);

        return redirect('post')->with('success', 'Berhasil Mengupdate Data Post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->foto) {
            Storage::delete($post->foto);
        }

        $post->delete($post->id);

        return redirect('post')->with('success', 'Berhasil Menghapus data');
    }


    public function cekStatus(Status $status)
    {
        $post = Post::with('user', 'kategori', 'status')->where('statusId', $status->id)->latest()->paginate(10);
        return view('backEnd.post.index', compact('post'));
    }

    public function sortCategory(Kategori $kategori)
    {
        $post = Post::with('user', 'kategori', 'status')->where('kategoriId', $kategori->id)->latest()->paginate(10);
        return view('backEnd.post.index', compact('post'));
    }
}
