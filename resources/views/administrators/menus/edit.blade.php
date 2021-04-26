@extends('templates.administrators.adminlte')
@section('title', 'Edit Menu')
@section('breadcrumb', 'Menus')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ url('menus/'.$menu->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input class="form-control my-3 @error('menu') is-invalid @enderror" type="text" id="menu" name="menu" placeholder="Menu" aria-label="default input example" value="{{$menu->menu}}">
    <div class="invalid-feedback">
        @error('menu')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('date') is-invalid @enderror" type="date" id="date" name="date" aria-label="default input example" value="{{$menu->date}}">
    <div class="invalid-feedback">
        @error('date')
        {{ $message }}
        @enderror
    </div>

    <select class="form-select my-3 @error('day') is-invalid @enderror" aria-label="Default select example" id="day" name="day">
        <option value="" disabled>--- Select Day ---</option>
        @php
         $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu'];   
        @endphp
        @foreach ($days as $day)
            @if ($day == $menu->day)
              <option value="{{$day}}" selected>{{$day}}</option>
            @else
            <option value="{{$day}}">{{$day}}</option>
            @endif
        @endforeach
    </select>
    <div class="invalid-feedback">
        @error('day')
        {{ $message }}
        @enderror
    </div>

    <select class="form-select my-3 @error('type') is-invalid @enderror" aria-label="Default select example" id="type" name="type">
        <option value="" disabled>--- Select Type ---</option>
        @php
          $type = ['Lunch', 'Dinner'];   
        @endphp
        @foreach ($type as $t)
          @if ($t == $menu->type)
            <option value="{{$t}}" selected>{{$t}}</option>
          @else
            <option value="{{$t}}">{{$t}}</option>
          @endif
        @endforeach
    </select>
    <div class="invalid-feedback">
        @error('type')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('description') is-invalid @enderror" type="text" id="description" name="description" placeholder="Description" aria-label="default input example" value="{{$menu->description}}">
    <div class="invalid-feedback">
        @error('description')
        {{ $message }}
        @enderror
    </div>

    <input class="form-control my-3 @error('price') is-invalid @enderror" type="text" id="price" name="price" placeholder="Price" aria-label="default input example" value="{{$menu->price}}">
    <div class="invalid-feedback">
        @error('price')
        {{ $message }}
        @enderror
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Update</button>
    </div>

</form>

@endsection