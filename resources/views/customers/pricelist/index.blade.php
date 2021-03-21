@include('templates.customers.header')
<div class="container" style="padding-top: 98px;">
    <div class="container border rounded mb-2 py-3">

        <div class="row">
            <div class="col-lg-6">
                <h2 class="import my-2">Lunch</h2>
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                <img class="img-fluid mx-auto responsive d-block" width="600" src="{{ asset('assets/images/dummyprice.jpeg') }}" alt="">

            </div>
            <div class="col-lg-6">
                <h2 class="import my-2">Dinner</h2>
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                <img class=" img-fluid mx-auto responsive d-block" width="600" src="{{ asset('assets/images/dummyprice.jpeg') }}" alt="">

            </div>
        </div>
    </div>
</div>
@include('templates.customers.footer')