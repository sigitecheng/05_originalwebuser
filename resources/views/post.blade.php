@extends('layouts.main')
@section('container')

<h3 class="mb-5">Halaman Blog Post</h3>

@foreach ($post as $pos)

<article class="mb-5 border-bottom pb-5">
    <h3 class="text-decoration-none text-success">{{ $pos->title }}</h3>
    <p>By. Sigit Iqlima in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama_kategori }}</a></p>

    <h5>{{ $pos->excerpt }}</h5>

    <a href="/posts/{{ $pos->slug }} ">Read More.. </a>
</article>
@endforeach
@endsection