@extends('layouts.main')

@section('container')
<article class="my-4">
    <h4><?= $post->title; ?></h4>

    {!! $post->body !!}
</article>
<a class="btn btn-sn btn-success" href="/blog">
    <= Back To Post</a>

        @endsection