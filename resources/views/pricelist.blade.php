<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List</title>
    <link href="/css/app.css" rel="stylesheet">

    <style>
        .dropdown.open .caret {
            border-top: none;
            border-bottom: 4px solid #000000;
        }

        @import url('https://fonts.googleapis.com/css?family=Marck+Script');

        .import {
            font-family: 'Marck Script', cursive;
            font-size: 30px;
        }
    </style>
</head>
@include ('test.header')

<body>
    <div class="container" style="padding-top: 98px;">
        <div class="container border rounded mb-2 py-3">

            <div class="row">
                <div class="col-lg-6">
                    <h2 class="import my-2">Lunch</h2>
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                    <img class="img-fluid mx-auto responsive d-block" width="600" src="/images/dummyprice.jpeg" alt="">

                </div>
                <div class="col-lg-6">
                    <h2 class="import my-2">Dinner</h2>
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                    <img class=" img-fluid mx-auto responsive d-block" width="600" src="/images/dummyprice.jpeg" alt="">

                </div>
            </div>
        </div>
    </div>
    @include ('test.footer')
</body>


</html>