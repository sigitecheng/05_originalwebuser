@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h4 class="mb-2"><?= $post->title; ?></h4>

            <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }} </a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama_kategori }}</a></p>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image)}}" alt=" $post->category->nama_kategori " class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama_kategori }}" class="card-img-top" alt="{{ $post->category->nama_kategori }}" class="img-fluid"">
            @endif

             <article>
                <h6 class=" my-3 fs-6 fw-semibold"> {!! $post->body !!}</h6>
            </article>

            <a class="btn btn-sn btn-success mb-5" href="/blog">
                <= Back To Post</a>


        </div>
    </div>
</div>

@endsection