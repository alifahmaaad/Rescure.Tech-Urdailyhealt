@extends('templates.administrators.adminlte')
@section('title', 'List users')
@section('main')
<div class="container">
    <div class="row">
        <button type="button" class="btn btn-success">Create</button>
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
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-warning">Archieve</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection