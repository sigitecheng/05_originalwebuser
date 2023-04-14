@extends('dashboard.layouts.main')

@section('container')


<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">


            <h4 class="mb-2"><?= $post->title; ?></h4>


            <a class="btn btn-sn btn-success mb-2 mt-2" href="/dashboard/posts"><span data-feather="arrow-left"></span>
                Back To My Post</a>
            <a class="btn btn-sn btn-warning mb-2 mt-2" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span>
                Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-sn btn-danger mb-2 mt-2 " onclick="return confirm('Are you sure?!')"><span data-feather="trash"></span> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image ) }}" class="card-img-top mt-3" alt="{{ $post->category->nama_kategori }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama_kategori }}" class="card-img-top mt-3" alt="{{ $post->category->nama_kategori }}" class="img-fluid">
            @endif

            <article>
                <h6 class=" my-3 fs-6 fw-semibold"> {!! $post->body !!}</h6>
            </article>


        </div>
    </div>
</div>


@endsection