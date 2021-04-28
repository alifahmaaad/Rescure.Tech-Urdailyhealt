@extends('templates.administrators.adminlte')
@section('breadcrumb', 'Articles')
@section('main')
<div class="container">
    <div class="row header">
        <h1 class="mt-3">Archieved Articles</h1>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Archieved</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th scope="col">{{$loop->iteration}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->updated_at}}</td>
                    <td><img src="{{ asset($article->thumbnail) }}" alt="Thumbnail" class="img-fluid" width="100"></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a href="{{url('articles/restore/'.$article->id)}}" class="btn btn-primary" onclick="return confirm('Yakin kembalikan data?')">Restore</a>
                            <a href="{{url('articles/kill/'.$article->id)}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection