@extends('layouts.main')


@section('container')

@foreach ($post as $pos)


<article class="my-5"></article>
<h3>
    <a href="/posts/<?= $pos["slug"]; ?>"><?= $pos["title"]; ?></a>
</h3>
<h3><?= $pos["author"]; ?></h3>
<h5><?= $pos["body"]; ?></h5>

@endforeach

@endsection