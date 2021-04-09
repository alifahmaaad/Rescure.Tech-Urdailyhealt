@extends('templates.administrators.adminlte')
@section('main')
<div class="container">
    <div class="row header">
        <h1 class="mt-3">Archieved Users</h1>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">Archieved</th>
                    <th scope="col">Action</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>Babe</td>
                    <td>Babe@admin.com</td>
                    <td>Administrators</td>
                    <td>01/01/2021 00:00:01</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary">Restore</button>
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Sadana</td>
                    <td>Sadana@admin.com</td>
                    <td>Administrators</td>
                    <td>01/01/2021 00:00:03</td>
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