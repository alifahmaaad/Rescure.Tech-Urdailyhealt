@extends('templates.administrators.adminlte')
@section('title', 'List Articles')
@section('breadcrumb', 'Articles')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('articles/create') }}" type="button" class="btn btn-success">Create</a>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td><img src="{{ asset($article->thumbnail) }}" alt="Thumbnail" class="img-fluid" width="100"></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a type="button" class="btn btn-primary" href="{{ url('articles/' . $article->id . '/edit') }}">Edit</a>
                            <form action="{{url('articles/'.$article->id)}}" method='post' class="d-inline">
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