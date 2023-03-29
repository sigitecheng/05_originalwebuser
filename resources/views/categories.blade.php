@extends('layouts.main')
@section('container')


<h1 class="mb-5">Post Categories</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->nama_kategori }}</a></h2>
    </li>
</ul>

<a class="btn btn-sn btn-success" href="/blog">
    <= Back To Post</a>

        @endforeach

        @endsection