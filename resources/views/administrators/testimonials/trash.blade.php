@extends('templates.administrators.adminlte')
@section('main')
<div class="container">
    <div class="row header">
        <h1 class="mt-3">All Testimonials</h1>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Archieved</th>
                    <th scope="col">Action</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>Dara</td>
                    <td>04/04/2021 23:59:59</td>
                    <td>Ada fotonya / nama fotonya aja</td>
                    <td>17/05/2020 19:04:20</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Restore</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Lula</td>
                    <td>05/04/2021 23:59:59</td>
                    <td>Ada fotonya / nama fotonya aja</td>
                    <td>17/07/2020 14:04:20</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Restore</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>   
@endsection