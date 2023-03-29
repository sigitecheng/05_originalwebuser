@extends('layouts.main')
@section('container')

<h3 class="mb-5">Halaman Blog Post</h3>

@foreach ($post as $pos)

<article class="my-5">
    <h3>
        <a href="/posts/{{ $pos->slug }} " class="text-decoration-none">{{ $pos->title }}</a>
    </h3>

    <h5>{{ $pos->excerpt }}</h5>
</article>
@endforeach
@endsection