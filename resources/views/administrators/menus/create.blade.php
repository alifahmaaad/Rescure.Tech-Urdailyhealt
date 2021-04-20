@extends('templates.administrators.adminlte')
@section('title', 'Create Menu')
@section('breadcrumb', 'Menus')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input class="form-control my-3 @error('menu') is-invalid @enderror" type="text" id="menu" name="menu" placeholder="Menu" aria-label="default input example">
    <div class="invalid-feedback">
        @error('menu')
        {{ $message }}
        @enderror
    </div>

    <select class="form-select my-3 @error('day') is-invalid @enderror" aria-label="Default select example" id="day" name="day">
        <option value="" selected>--- Select Day ---</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
    <div class="invalid-feedback">
        @error('day')
        {{ $message }}
        @enderror
    </div>

    <select class="form-select my-3 @error('type') is-invalid @enderror" aria-label="Default select example" id="type" name="type">
        <option value="" selected>--- Select Type ---</option>
        <option value="Lunch">Lunch</option>
        <option value="Dinner">Dinner</option>
    </select>
    <div class="invalid-feedback">
        @error('type')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('description') is-invalid @enderror" type="text" id="description" name="description" placeholder="Description" aria-label="default input example">
    <div class="invalid-feedback">
        @error('description')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('price') is-invalid @enderror" type="text" id="price" name="price" placeholder="Price" aria-label="default input example">
    <div class="invalid-feedback">
        @error('price')
        {{ $message }}
        @enderror
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Create</button>
    </div>

</form>

@endsection