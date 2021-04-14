@extends('templates.administrators.adminlte')
@section('title', 'List Menus')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('menus/create') }}" type="button" class="btn btn-success">Create</a>
    </div>
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
                                <a type="button" class="btn btn-primary" href="{{ url('menus/' . $menu->id . '/edit') }}">Edit</a>
                                <form action="{{url('menus/'.$menu->id)}}" method='post' class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-warning">Archieve</button>
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