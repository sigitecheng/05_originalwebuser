@extends('layouts.main')

@section('container')


<h3 class="mb-5">Halaman Blog Post Single</h3>
<article class="">
    <h4><?= $post->title; ?></h4>

    <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama_kategori }}</a></p>

    {!! $post->body !!}
</article>
<a class="btn btn-sn btn-success" href="/blog">
    <= Back To Post</a>

        @endsection