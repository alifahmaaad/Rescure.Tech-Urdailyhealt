@extends('templates.administrators.adminlte')
@section('title', 'List Menus')
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
                    <th scope="col">Menu</th>
                    <th scope="col">Day</th>
                    <th scope="col">Lunch / Dinner</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
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
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
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
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">3</th>
                    <td>Shirataki Rice</td>
                    <td>Selasa</td>
                    <td>Lunch</td>
                    <td>Beras dimasak menjadi nasi, udah gitu aja</td>
                    <td>Rp 70000</td>
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