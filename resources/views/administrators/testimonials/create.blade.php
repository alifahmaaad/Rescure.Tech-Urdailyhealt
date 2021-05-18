@extends('templates.administrators.adminlte')
@section('title', 'Create Testi')
@section('breadcrumb', 'Testimonials')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ route('testi.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input class="form-control my-3 @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" placeholder="Nama" aria-label="default input example" maxlength="255">
    <div class="invalid-feedback">
        @error('nama')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('isi') is-invalid @enderror" type="text" id="isi" name="isi" placeholder="Isi Testi" aria-label="default input example" maxlength="255">
    <div class="invalid-feedback">
        @error('isi')
        {{ $message }}
        @enderror
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Create</button>
    </div>

</form>
@endsection