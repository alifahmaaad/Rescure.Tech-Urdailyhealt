@extends('templates.administrators.adminlte')
@section('title', 'Add User')
@section('breadcrumb', 'Users')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input type="text" class="form-control my-3" id="name" name="name" placeholder="Long Name">

    <input type="text" class="form-control my-3" id="email" name="email" placeholder="E-mail">

    <input type="text" class="form-control my-3" id="password" name="password" placeholder="Password">

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Create</button>
    </div>

</form>

@endsection