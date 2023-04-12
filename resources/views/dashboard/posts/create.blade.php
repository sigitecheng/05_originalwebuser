@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Create New Post </h3>
</div>



<div class="col-lg-8">
    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title' )}} " autofocus>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            @error('title')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required disable readonly required>
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
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach

            </select>
            @error('category')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required value="{{ old('body') }}">
            @error('body')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror

            <trix-editor input="body"></trix-editor>

        </div>



        <button type="submit" class="btn btn-primary mb-4">Create Post</button>
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
</script>


@endsection