<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title"    => "All Post",
            // "post"     => Post::all()

            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            "post" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "post" => $post

        ]);
    }
}
