@extends('templates.administrators.adminlte')
@section('title', 'List Archived Menus')
@section('breadcrumb', 'Menus')
@section('main')
<div class="container">
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Day</th>
                    <th scope="col">Lunch / Dinner</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                <tr>
                    <th scope="col">{{$loop->iteration}}</th>
                    <td>{{$menu->menu}}</td>
                    <td>{{$menu->day}}</td>
                    <td>{{$menu->type}}</td>
                    <td>{{$menu->description}}</td>
                    <td>Rp {{$menu->price}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a href="{{url('menus/restore/'.$menu->id)}}" class="btn btn-primary">Restore</a>
                            <a href="{{url('menus/kill/'.$menu->id)}}" class="btn btn-danger" onsubmit="return confirm('Yakin hapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection