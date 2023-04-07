<?php


// use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

// ========================================================================
Route::get('/about', function () {
    return view('about', [
        "title"     => "About",
        "nama"      => "Sigit Septiadi Prasetyo",
        "email"     => "Sigit@gmail.com",
        "image"     => "istriku.jpg ",
        "active" => 'about'
    ]);
});

// ========================================================================


Route::get('/blog', [PostController::class, 'index']);
// Route::get('/blog', function () {

//     // return view('post', [
//     //     "title"    => "Blog",
//     //     "post"     => Post::all()
//     // ]);
// });

// ========================================================================
//HALAMAN SINGLE POST 

Route::get('posts/{post:slug}', [PostController::class, 'show']);

//{
// $blog_post = [
//     [
//         "title" => "Artikel Judul Pertama",
//         "slug" => "artikel-judul-pertama",
//         "author"   => "Sigit Septiadi",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
//     [
//         "title" => "Artikel Judul Kedua",
//         "slug" => "artikel-judul-kedua",
//         "author"   => "Iqlima Nur Izzati",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
// ];

// $new_post = [];
// foreach ($blog_post as $post) {
//     if ($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

// return view('posts', [
//     "title" => "Single Post",
//     "post" => Post::find($slug)

//         // ]);
//     }
// // );


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post Category By $category->nama_kategori",
        "active" => 'categories',
        'post' => $category->posts,
        'category' => $category->nama_kategori
    ]);
});


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('authordetails', [
        'title' => "Author By : $author->name",
        "active" => 'posts',
        // N+1 Problem Menggunakan lazy Eiger Loading 
        'posts' => $author->posts->load('category', 'user')

    ]);
});


Route::get('/login', [LoginController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
