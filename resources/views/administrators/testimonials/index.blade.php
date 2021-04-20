@extends('templates.administrators.adminlte')
@section('title', 'List Testimonials')
@section('breadcrumb', 'Testimonials')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('testi/create') }}" type="button" class="btn btn-success">Create</a>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testi)
                <tr>
                    <th scope="col">{{$loop->iteration}}</th>
                    <td>{{$testi->nama}}</td>
                    <td>{{$testi->isi}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a type="button" class="btn btn-primary" href="{{ url('testi/' . $testi->id . '/edit') }}">Edit</a>
                            <form action="{{url('testi/'.$testi->id)}}" method='post' class="d-inline">
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