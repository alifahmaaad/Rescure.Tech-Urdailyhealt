@include('templates.customers.header')

<div class="container text-center" id="faq">
    <div style="padding-top: 100px;">

        <div class="container faq  mb-2 ">
            <h1>Article</h1>
            <div class="row featurette">
                <div class="col-md-7 order-md-1">
                    <p>judul</p>
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-2">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p>judul</p>
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
        </div>
    </div>
</div>



@include('templates.customers.footer')