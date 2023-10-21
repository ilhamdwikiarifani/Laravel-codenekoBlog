<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Status;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $post = Post::with('user', 'kategori', 'status')
            ->where('statusId', 2)
            ->orWhere('statusId', 3)
            ->get();
        return view('frontEnd.layouts.home', compact('post'));
    }


    public function berita(Post $post)
    {
        return view('frontEnd.post.postSingle', compact('post'));
    }
}
