@extends('templates.administrators.adminlte')
@section('title', 'Edit User')
@section('breadcrumb', 'Users')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ url('users/'.$user->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('failed'))
    <div class="alert alert-danger">
        {{ session('failed') }}
    </div>
    @endif

    <input class="form-control my-3 @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Long Name" aria-label="default input example" value="{{$user->name}}" maxlength="255">
    <div class="invalid-feedback">
        @error('name')
        {{ $message }}
        @enderror
    </div>

    @if ($user->email != "admin@admin.com")
    <input class="form-control my-3 @error('email') is-invalid @enderror" type="text" id="email" name="email" placeholder="Email" aria-label="default input example" value="{{$user->email}}" maxlength="255">
    <div class="invalid-feedback">
        @error('email')
        {{ $message }}
        @enderror
    </div>
    @endif

    <input class="form-control my-3 @error('password') is-invalid @enderror" type="text" id="password" name="password" placeholder="Password" aria-label="default input example" maxlength="255">
    <div class="invalid-feedback">
        @error('password')
        {{ $message }}
        @enderror
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Update</button>
    </div>

</form>

@endsection