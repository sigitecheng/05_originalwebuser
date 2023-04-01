@extends('layouts.main')
@section('container')

<h3 class="mb-5">{{ $title }}</h3>

<!--  MENAMPILKAN CAR PERTAMA PADA POSTINGAN INI -->
@if ($post->count())

<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title">{{$post[0]->title}}</h3>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, autem! Expedita reiciendis hic officia nobis quae optio quisquam inventore aspernatur.</p>
        <p class="card-text"><small class="text-muted">Last Update sajam kamari</small></p>
    </div>
</div>
@else

<p class="text-center fs-4">No Post Found Here. </p>

@endif

<!--  AKHIR HALAMAN DARI POSTINGAN INI -->

@foreach ($post as $pos)

<article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-danger">{{ $pos->title }}</h3></a>
    <p> By. <a href="/authors/{{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a> in <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->nama_kategori }}</a></p>

    <h5>{{ $pos->excerpt }}</h5>

    <a href="/posts/{{ $pos->slug }} " class="d-block mt-3">Read More.... </a>
</article>
@endforeach
@endsection