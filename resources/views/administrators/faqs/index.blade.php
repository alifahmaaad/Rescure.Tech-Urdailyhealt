@extends('templates.administrators.adminlte')
@section('title', 'List FAQs')
@section('breadcrumb', 'FAQs')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('faqs/create') }}" type="button" class="btn btn-success">Create</a>
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
                @foreach($faqs as $faq)
                <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <a type="button" class="btn btn-primary" href="{{ url('faqs/' . $faq->id . '/edit') }}">Edit</a>
                            <form action="{{url('faqs/'.$faq->id)}}" method='post' class="d-inline" onclick="return confirm('Yakin mengarsipkan data?')">
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