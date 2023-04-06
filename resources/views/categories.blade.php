@extends('layouts.main')
@section('container')


<h1 class="mb-5">Post Categories</h1>


<div class="container">
    <div class="row">

        @foreach ($categories as $cat)
        <div class="col-md-4 py-4">
            <a href="/blog?category={{ $cat->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x400?{{ $cat->nama_kategori }}" class="card-img" alt="{{ $cat->nama_kategori }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-white text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $cat->nama_kategori }}</h5>
                    </div>
                </div>
            </a>
        </div>
        <br>
        @endforeach

    </div>
</div>


<!-- 


@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->nama_kategori }}</a></h2>
    </li>
</ul>

<a class="btn btn-sn btn-success" href="/blog">
    <= Back To Post</a>

        @endforeach -->

@endsection