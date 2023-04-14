@extends('dashboard.layouts.main')

@section('container')


<!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> -->


<!-- FITUR TOOL BAR UNTUK LAPORAN YANG AKAN DI EKSEKUSI OLEH USER SENDIRI  -->

<!-- <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div> -->

<!-- ########################  -->

<!-- </div> -->

<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

<h3 class="mt-2 mb-2">My Posts</h3>
<div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-sn btn-primary mb-3"><span data-feather="file-plus"></span> Create New Post</a>

    @if(session()->has('success'))
    <div class="alert alert-secondary alert-dismissible fade show col-lg-12" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title}}</td>
                <td>{{ $post->category->nama_kategori}}</td>
                <td class="text-center">
                    <!-- HATI HATI DI BAWAH IN IMENGGUNAKAN FITU GETROUTEKEYNAME AGAR TIDAK MENCARI ID BERDASARKAN NO MELAINKAN SESUAI YANG KITA INGINKAN  DENGAN CONTOH TABLE 'SLUG'-->
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>


                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?!')"><span data-feather="trash"></span></button>
                    </form>

                </td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection