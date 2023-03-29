@extends('layouts.main')
@section('container')
@foreach ($post as $pos)

<h1 class="mb-5">Post Category : {{ $category }}</h1>

<article class="my-5"></article>
<h3>
    <a href="/posts/<?= $pos->slug; ?>"><?= $pos->title; ?></a>
</h3>

<h5><?= $pos->excerpt; ?></h5>


<a class="btn btn-sn btn-success" href="/blog">
    <= Back To Post</a>

        @endforeach

        @endsection