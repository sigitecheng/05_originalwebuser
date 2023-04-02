@extends('layouts.main')
@section('container')

<h4 class="mb-5 text-primary">Halaman : {{ $title }}</h4>

<!-- ===================================   MENAMPILKAN CAR PERTAMA PADA POSTINGAN INI  =================================== -->
@if ($post->count())

<div class="card mb-3">
    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none text-white">{{ $post[0]->category->nama_kategori }}</a></div>
    <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->nama_kategori }}" class="card-img-top" alt="{{ $post[0]->category->nama_kategori }}">
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

<!-- ============================== HALAMAN BLOG TENGAH UNTUK PENULIS ======================================== -->
<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $pos)

        <div class="col-md-4 py-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->nama_kategori }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $pos->category->nama_kategori }}" class="card-img-top" alt="{{ $pos->category->nama_kategori }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $pos->title }}</h5>
                    <p>
                        <small> By. <a href="/authors/{{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a>
                            {{ $pos->created_at->diffForHumans() }}</small>
                    </p>
                    <p class="card-text">{{ $pos->excerpt }}</p>
                    <a href="/posts/{{ $pos->slug }} " class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<!-- ============================== ####################################### ======================================== -->

<!-- #############################################
@foreach ($post->skip(1) as $pos)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-danger">{{ $pos->title }}</h3></a>
    <p> By. <a href="/authors/{{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a> in <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->nama_kategori }}</a></p>

    <h5>{{ $pos->excerpt }}</h5>

    <a href="/posts/{{ $pos->slug }} " class="d-block mt-3">Read More.... </a>
</article>
@endforeach

########################################## -->

@endsection