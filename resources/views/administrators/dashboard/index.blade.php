@extends('templates.administrators.adminlte')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('main')
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-4">
      <div class="card text-center" style="width: 18rem;">
        <h1>{{$data['article']}}</h1>
        <p class="card-text">Jumlah Artikel</p>
        <a href="{{ url('/articles') }}" class="btn btn-primary">List Articles    </a>
      </div>
    </div>
    <div class="col-4">
        <div class="card text-center" style="width: 18rem;">
          <h1>{{$data['menu']}}</h1>
          <p class="card-text">Jumlah Menu</p>
          <a href="{{ url('/menus') }}" class="btn btn-primary">List  Menus    </a>
         </div>
      </div>
    </div>
  <div class="row justify-content-md-center">
    <div class="col-4">
      <div class="card text-center" style="width: 18rem;">
        <h1>{{$data['user']}}</h1>
        <p class="card-text">Jumlah User</p>
        <a href="{{ url('/users') }}" class="btn btn-primary">List Users    </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card text-center" style="width: 18rem;">
        <h1>{{$data['testi']}}</h1>
        <p class="card-text">Jumlah Testi</p>
        <a href="{{ url('/testi') }}" class="btn btn-primary">List  Testimonial    </a>
      </div>
    </div>
  </div>
</div>  
@endsection