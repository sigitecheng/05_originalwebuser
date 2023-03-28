@extends('layouts.main')
@section('container')
@foreach ($post as $pos)

<article class="my-5"></article>
<h3>
    <a href="/posts/<?= $pos->slug; ?>"><?= $pos->title; ?></a>
</h3>

<h5><?= $pos->excerpt; ?></h5>

@endforeach

@endsection