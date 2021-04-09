@extends('templates.administrators.adminlte')
@section('main')
<div class="container">
    <div class="row header">
        <h1 class="mt-3">Archieved Menus</h1>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Day</th>
                    <th scope="col">Lunch / Dinner</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Archieved</th>
                    <th scope="col">Action</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>Ayam Rebus</td>
                    <td>Senin</td>
                    <td>Lunch</td>
                    <td>Seekor ayam direbus, diberikan perasan jeruk nipis</td>
                    <td>Rp 50000</td>
                    <td>23/03/2020 23:19:07</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Restore</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Mashed Potato</td>
                    <td>Senin</td>
                    <td>Dinner</td>
                    <td>Kentang dihancurkan, diberikan susu dan keju, lalu diaduk hingga lembut</td>
                    <td>Rp 40000</td>
                    <td>21/01/2021 22:19:07</td>
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