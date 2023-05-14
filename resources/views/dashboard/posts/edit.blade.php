@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Edit Form Post </h3>
</div>



<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        <!-- HATI HATI DENGAN PENAMBAHAN ENCTYPE PADA FITUR DI ATAS, JANGAN LUPA UNTUK SELALU MENAMBAHKAN FITUR ENCTYPE AGAR FORM DAPAT MENERIMA FILE  -->
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title )}} " autofocus>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            @error('title')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') , $post->slug }}" required>
            @error('slug')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="category" class="form-label">Category</label>

            <select class="form-select" name="category_id">

                @foreach($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id) <!--  category_id bernilai string dan categgori panah satu bernilai integer == ( 2 sama dengan artinya string ) dan === ( 3 sama dengan artinya adalah integer)  -->
                <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endif

                @endforeach

            </select>
            <!-- FITUR PEMBERITAHUAN ERROR PADA KATEGORI SELECT   -->

            <!-- @error('category')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror -->

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <!-- PENGKONDISIAN OLD IMAGE UNTUK MEMBAWA KE USERS SETELAH ITU BARU DIGANTI DAN YANG LAMA BISA DI HAPUSKAN  -->
            <input type="hidden" name="oldImage" value="{{ $post->image }}">

            @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <!--  DIBAWAH IN ADA PENAMBAHAN FITUR PREVIEW GAMBAR SEBELUM UPLOAD GAMBAR PADA WEBSITE KITA  DENGAN KATA KUNCI ONCHANGE // RAHKAN LANGSUNG KE JAVASCRIPT DI PALING BAWAH -->

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            <!-- JANGAN LUPA JIKA INGIN MENAMBAHKAN FILE UPLOAD IMAGE SERTAKAN JUGA DI FORM UNTUK TIPE ENCTYPENYA  -->
            @error('image')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
            <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>

        </div>



        <button type="submit" class="btn btn-primary mb-4">Update Post</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');


    // PEMANGGILAN FETCH DIBAWAH HARUS MEMILIKI METHOD YANG DI LAKUKAN OLEH CONTROLLER DI FOLDER CONTROLLER MAKA BUATLAH TERLEBIH DAHULU METHODNYA 
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


@endsection