@extends('templates.administrators.adminlte')
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
                <tr>
                    <th scope="col">1</th>
                    <td>Lemak Jahat</td>
                    <td>07/04/2021 19:19:19</td>
                    <td>Ada gambarnya / nama gambarnya aja</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Restore</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Junk Food</td>
                    <td>05/04/2021 12:41:03</td>
                    <td>Ada gambarnya / nama gambarnya aja</td>
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