@extends('templates.administrators.adminlte')
@section('title', 'List Archived Testimonials')
@section('breadcrumb', 'Testimonials')
@section('main')
<div class="container">
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
                            <a href="{{url('testi/restore/'.$testi->id)}}" class="btn btn-primary">Restore</a>
                            <a href="{{url('testi/kill/'.$testi->id)}}" class="btn btn-danger" onsubmit="return confirm('Yakin hapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection