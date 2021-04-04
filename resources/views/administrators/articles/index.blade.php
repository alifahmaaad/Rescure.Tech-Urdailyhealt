@extends('templates.administrators.adminlte')
@section('main')
<h1>Ini index di articles</h1>
<div class="container">
    <table class="table table-light table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Numb</th>
                <th scope="col">Title</th>
                <th scope="col">Last Update</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <th scope="col">1</th>
                <td>Makanan Sehat</td>
                <td>04/04/2021 23:59:59</td>
                <td>Ada gambarnya / nama gambarnya aja</td>
                <td>
                    <button type="button" class="btn btn-outline-primary">Edit</button>
                    <button type="button" class="btn btn-outline-primary">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="col">2</th>
                <td>Makanan Diet</td>
                <td>05/04/2021 23:59:59</td>
                <td>Ada gambarnya / nama gambarnya aja</td>
                <td>
                    <button type="button" class="btn btn-outline-primary">Edit</button>
                    <button type="button" class="btn btn-outline-primary">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="col">3</th>
                <td>Hidup Sehat</td>
                <td>06/04/2021 23:59:59</td>
                <td>Ada gambarnya / nama gambarnya aja</td>
                <td>
                    <button type="button" class="btn btn-outline-primary">Edit</button>
                    <button type="button" class="btn btn-outline-primary">Delete</button>
                </td>
            </tr>
        </tbody>   
    </table>
</div>  
@endsection