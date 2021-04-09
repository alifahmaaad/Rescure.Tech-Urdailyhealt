<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UrdailyHealth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <style>
        b {
            margin-top: 4px;
            font-size: 30px;
            float: right;
        }

        .paddingheader {
            padding-top: -10px;
            padding-bottom: -10px;
        }

        .responsive {
            width: 100%;
            height: auto;
        }
    </style>
    <link rel="icon" href="{{ asset('assets/images/logo.jpg') }}" />
    <style>
        .navbar-nav>li>.dropdown-menu a:active,
        .navbar-nav>li>.dropdown-menu a:hover {
            background-color: #f1bbbc;
        }

        nav {
            background-color: #f1bbbc;
        }
    </style>


</head>




<!-- </header> -->

<body>
    <header class="site-header">
        <div class="fixed-top">
            <!-- <header class="site-header sticky-top py-1"> -->
            <!-- <p class=" col import"><b>You cant stop me from eating healthy</b></p> -->
            <nav class="navbar navbar-expand-md fixed ">
                <div class="container ">
                    <div class="col">
                        <a href="/"><img class="bd-placeholder-img rounded-circle" style="height: 75px; width: 75px" src="{{ asset('assets/images/logo.jpg') }}" class=" img-fluid "></a>
                    </div>
                    <button class="navbar-toggler navbar-dark  " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarsExampleDefault">

                        <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                            <li class="nav-item px-3">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link " href="pricelist">Pricelist</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link " href="#">Article</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link " href="#">About Us!</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link " href="#">FAQ</a>
                            </li>
                            <li class="nav-item  px-3 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Admin</a>
                                <ul style="background-color: white;" class="dropdown-menu" aria-labelledby="dropdown01">
                                    <li><a class="dropdown-item" href="{{ url('login') }}">Login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-3 pt-1">
                                <a class="btn btn-success rounded-pill" href="#">Order Now &raquo;</a>
                            </li>
                        </ul>
                        <!-- <form class="d-flex">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form> -->
                    </div>
                </div>

            </nav>
        </div>
    </header>