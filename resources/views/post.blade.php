@extends('layouts.main')
@section('container')

<h4 class="mb-3 text-primary text-center">Halaman : {{ $title }}</h4>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">

            @endif

            @if (request('user'))
            <input type="hidden" name="user" value="{{ request('user') }}">

            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-info" type="submit">Search</button>
            </div>

        </form>
    </div>
</div>

<!-- ===================================   MENAMPILKAN CAR PERTAMA PADA POSTINGAN INI  =================================== -->
@if ($post->count())

<div class="card mb-3">
    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none text-white">{{ $post[0]->category->nama_kategori }}</a></div>


    @if ($post[0]->image)
    <div style="max-height: 350px; overflow:hidden">

        <img src="{{ asset('storage/' . $post[0]->image ) }}" class="card-img-top mt-3" alt="{{ $post[0]->category->nama_kategori }}" class="img-fluid">

    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->nama_kategori }}" class="card-img-top" alt="{{ $post[0]->category->nama_kategori }}">

    <!-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama_kategori }}" class="card-img-top mt-3" alt="{{ $post->category->nama_kategori }}" class="img-fluid"> -->
    @endif




    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{$post[0]->title}}</h3></a>
        <p>
            <small> By. <a href="/blog?user={{ $post[0]->user->username }}" class="text-decoration-none">{{ $post[0]->user->name }}</a> in <a href="/blog?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->nama_kategori }}</a>
                {{ $post[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{$post[0]->excerpt}}</p>

        <a href="/posts/{{ $post[0]->slug }}" class="mt-3 btn btn-sn btn-primary text-decoration-none">Read More</a>

    </div>
</div>

<!-- ===================================   AKHIR HALAMAN DARI POSTINGAN INI ===================================  -->

<!-- ============================== HALAMAN BLOG TENGAH UNTUK PENULIS ======================================== -->
<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $pos)

        <div class="col-md-4 py-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/blog?category={{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->nama_kategori }}</a></div>
                @if ($pos->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $pos->image )}}" alt="{{ $pos->category->nama_kategori }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $pos->category->nama_kategori }}" class="card-img-top" alt="{{ $pos->category->nama_kategori }}">
                @endif


                <div class="card-body">
                    <h5 class="card-title">{{ $pos->title }}</h5>
                    <p>
                        <small> By. <a href="/blog?user={{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a>
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

@else

<p class="text-center fs-4">No Post Found Here. </p>

@endif


<!-- ##################### LINK PAGINATIONS ################ -->
<div class="d-flex justify-content-center">
    {{ $post->links()}}
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