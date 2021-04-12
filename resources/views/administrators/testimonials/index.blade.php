@extends('templates.administrators.adminlte')
@section('title', 'List Testimonials')
@section('main')
<div class="container">
    <div class="row">
        <button type="button" class="btn btn-success">Create</button>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>Awkarin</td>
                    <td>Ada fotonya / nama fotonya aja</td>
                    <td>Makanannya enak</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Sargib</td>
                    <td>Ada fotonya / nama fotonya aja</td>
                    <td>Murah dan enak</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">3</th>
                    <td>Ericarl</td>
                    <td>Ada fotonya / nama fotonya aja</td>
                    <td>Sehat banget</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection