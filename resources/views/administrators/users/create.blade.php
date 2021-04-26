@extends('templates.administrators.adminlte')
@section('title', 'Add User')
@section('breadcrumb', 'Users')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Herry Rinzuki">
        <label for="floatingInput">Long Name</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Create</button>
    </div>

</form>

<!-- script -->

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection