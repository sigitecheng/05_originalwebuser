@extends('layouts.main')
@section('container')

<h3 class="mb-5">Halaman Blog Post</h3>

@foreach ($post as $pos)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-danger">{{ $pos->title }}</h3></a>
    <p>By. <a href="" class="text-decoration-none">{{ $pos->user->name }}</a> in <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->nama_kategori }}</a></p>

    <h5>{{ $pos->excerpt }}</h5>

    <a href="/posts/{{ $pos->slug }} " class="d-block mt-3">Read More.... </a>
</article>
@endforeach
@endsection