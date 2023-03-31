@extends('layouts.main')
@section('container')

<h3 class="mb-5">Halaman Blog Post</h3>

@foreach ($posts as $post)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title }}</h3></a>
    <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama_kategori }}</a></p>

    <h5>{{ $post->excerpt }}</h5>

    <a href="/posts/{{ $post->slug }} " class="d-block mt-3">Read More.... </a>
    <a class="btn btn-sn btn-warning mt-3" href="/blog">
        <= Back To Blog</a>
</article>
@endforeach
@endsection