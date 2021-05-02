@extends('templates.administrators.adminlte')
@section('title', 'List Archived Users')
@section('breadcrumb', 'Users')
@section('main')
<div class="container">
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="col">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a href="{{url('users/restore/'.$user->id)}}" class="btn btn-primary" onclick="return confirm('Yakin kembalikan data?')">Restore</a>
                            <a href="{{url('users/kill/'.$user->id)}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection