@extends('layouts.main')
@section('container')

<h3 class="mb-5">{{ $title }}</h3>

<!-- ===================================   MENAMPILKAN CAR PERTAMA PADA POSTINGAN INI  =================================== -->
@if ($post->count())

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $post[0]->category->name }}" class="card-img-top" alt="{{ $post[0]->category->name }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{$post[0]->title}}</h3></a>
        <p>
            <small> By. <a href="/authors/{{ $post[0]->user->username }}" class="text-decoration-none">{{ $post[0]->user->name }}</a> in <a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->nama_kategori }}</a>
                {{ $post[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{$post[0]->excerpt}}</p>

        <a href="/posts/{{ $post[0]->slug }}" class="mt-3 btn btn-sn btn-primary text-decoration-none">Read More</a>

    </div>
</div>
@else

<p class="text-center fs-4">No Post Found Here. </p>

@endif

<!-- ===================================   AKHIR HALAMAN DARI POSTINGAN INI ===================================  -->

<div class="container">
    <div class="row">
        <div class="col-md-4 py-4">
            <div class="card">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }} " class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($post->skip(1) as $pos)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-danger">{{ $pos->title }}</h3></a>
    <p> By. <a href="/authors/{{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a> in <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->nama_kategori }}</a></p>

    <h5>{{ $pos->excerpt }}</h5>

    <a href="/posts/{{ $pos->slug }} " class="d-block mt-3">Read More.... </a>
</article>
@endforeach
@endsection