@extends('templates.administrators.adminlte')
@section('title', 'List users')
@section('breadcrumb', 'Users')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('users/create') }}" type="button" class="btn btn-success">Add User</a>
    </div>
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
                            <a type="button" class="btn btn-primary" href="{{ url('users/' . $user->id . '/edit') }}">Edit</a>
                            <form action="{{url('users/'.$user->id)}}" method='post' class="d-inline" onclick="return confirm('Yakin mengarsipkan data?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-warning">Archive</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection