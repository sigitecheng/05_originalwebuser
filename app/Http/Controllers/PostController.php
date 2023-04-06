<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama_kategori;
        }

        if (request('user')) {
            $author = User::firstWhere('username', request('user'));
            $title = ' by ' . $author->name;
        }

        // $post = Post::latest(); PAKET 2

        // if (request('search')) {
        //     $post->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('excerpt', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        // dd(request('search'));
        //  dd(request('search'));

        return view('post', [
            "title"    => "All Posts" . $title,
            "active" => 'posts',
            // "post"     => Post::all()
            // MENGGUNAKAN TOOLS EIGER LOADING AGAR OPTIMAL DALAM MANGANTISIPASI QUERY YANG ADA 
            // "post" => Post::latest()->get() PAKET 1
            "post" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
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
