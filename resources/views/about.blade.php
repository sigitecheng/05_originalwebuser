@extends('layouts.main')

@section('container')

<h1>Halaman About</h1>
<h3><?php echo $nama; ?></h3>
<h3><?php echo $email; ?></h3>
<img src="img/<?= $image; ?>" alt=<?= $nama; ?> width="200px" class="img-tumbnail rounded-circle">


@endsection