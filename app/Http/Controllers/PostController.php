<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $post = Post::latest(); PAKET 2

        // if (request('search')) {
        //     $post->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('excerpt', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        // dd(request('search'));
        //  dd(request('search'));

        return view('post', [
            "title"    => "All Posts",
            "active" => 'posts',
            // "post"     => Post::all()
            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            // "post" => Post::latest()->get() PAKET 1
            "post" => Post::latest()->filter(request(['search']))->get()
            //  "post" => $post->get() // PAKET 2
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post

        ]);
    }
}
