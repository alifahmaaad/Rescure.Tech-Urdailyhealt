@extends('templates.administrators.adminlte')
@section('breadcrumb', 'FAQs')
@section('main')
<div class="container">
    <div class="row header">
        <h1 class="mt-3">Archieved FAQs</h1>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <th scope="col">{{$loop->iteration}}</th>
                    <td>{{$faq->question}}</td>
                    <td>{{$faq->answer}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a href="{{url('faqs/restore/'.$faq->id)}}" class="btn btn-primary">Restore</a>
                            <a href="{{url('faqs/kill/'.$faq->id)}}" class="btn btn-danger" onsubmit="return confirm('Yakin hapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection