@extends('templates.administrators.adminlte')
@section('title', 'Create Article')
@section('main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input class="form-control my-2 @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Input Title" aria-label="default input example">
    <div class="invalid-feedback">
        @error('title')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-2 @error('author') is-invalid @enderror" type="text" id="author" name="author" placeholder="Input Author" aria-label="default input example">
    <div class="invalid-feedback">
        @error('author')
        {{ $message }}
        @enderror
    </div>

    <div class="mb-3">
        <input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="thumbnail" name="thumbnail">
    </div>
    <div class="invalid-feedback">
        @error('thumbnail')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-2" type="text" id="content" name="content" placeholder="Input Content" aria-label="default input example">

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Create</button>
    </div>

</form>
@endsection