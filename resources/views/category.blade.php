@extends('layouts.main')
@section('container')

<h5><a href="/categories" class="text-decoration-none text-black btn btn-sn btn-warning">Pilih Berdasarkan Kategori</a></h5>
<h3 class="mb-5 mt-5">{{ $title }}</h3>
@foreach ($post as $pos)


<article class="my-5 border-bottom pb-5">
    <h3>
        <a href="/posts/<?= $pos->slug; ?>"><?= $pos->title; ?></a>
    </h3>

    <h5><?= $pos->excerpt; ?></h5>


    <a class="btn btn-sn btn-danger mt-2" href="/blog">
        <= Back To Post </a>

</article>

@endforeach

@endsection