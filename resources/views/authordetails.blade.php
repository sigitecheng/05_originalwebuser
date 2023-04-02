@extends('layouts.main')
@section('container')

<h3 class="mb-5">{{ $title }}</h3>


<!-- ===================================   MENAMPILKAN CAR PERTAMA PADA POSTINGAN INI  =================================== -->
@if ($posts->count())

<div class="card mb-3">
    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $posts[0]->category->nama_kategori }}</a></div>
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->nama_kategori }}" class="card-img-top" alt="{{ $posts[0]->category->nama_kategori }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</h3></a>
        <p>
            <small> By. <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->nama_kategori }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>

        <a href="/posts/{{ $posts[0]->slug }}" class="mt-3 btn btn-sn btn-primary text-decoration-none">Read More</a>

    </div>
</div>
@else

<p class="text-center fs-4">No Post Found Here. </p>

@endif

<!-- ===================================   AKHIR HALAMAN DARI POSTINGAN INI ===================================  -->

<!-- ============================== HALAMAN BLOG TENGAH UNTUK PENULIS ======================================== -->
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)

        <div class="col-md-4 py-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->nama_kategori }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->nama_kategori }}" class="card-img-top" alt="{{ $post->category->nama_kategori }}">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small> By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                            {{ $post->created_at->diffForHumans() }}</small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }} " class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<!-- ============================== ####################################### ======================================== -->

<!-- 
@foreach ($posts as $post)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title }}</h3></a>
    <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama_kategori }}</a></p>

    <h5>{{ $post->excerpt }}</h5>

    <a href="/posts/{{ $post->slug }} " class="d-block mt-3">Read More.... </a>
    <a class="btn btn-sn btn-warning mt-3" href="/blog">
        <= Back To Blog</a>
</article>
 -->

@endforeach
@endsection