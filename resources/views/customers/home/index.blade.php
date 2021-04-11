@include('templates.customers.header')
<div class="paddingheader" style="background-image: url({{ asset('assets/images/bghomepage.jpg') }});background-size: 100% 100%;background-repeat: no-repeat;">
    <main class="container pt-5">
        <div id="myCarousel" class="carousel slide py-5" data-ride="carousel">
            </br>
            <div class="carousel-indicators">
                <li type="button" data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                <li type="button" data-target="#myCarousel" data-slide-to="1" aria-label="Slide 2"></li>
                <li type="button" data-target="#myCarousel" data-slide-to="2" aria-label="Slide 3"></li>
            </div>
            <div class="carousel-inner">
                <div id="headcarousel" class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#fff" />
                    </svg>
                    <img class="responsive" src="https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-pure-color-watercolor-graffiti-gradient-background-board-design-board-design-image_66713.jpg" alt=""></img>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h2>Example headline.</h2>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-md btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div id="headcarousel" class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#fff" />
                    </svg>
                    <img class="responsive" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Another example headline.</h2>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-md btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div id="headcarousel" class="carousel-item ">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#fff" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h2>One more for good measure.</h2>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-md btn-primary " href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" role="button" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" role="button" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden sr-only">Next</span>
            </a>
        </div>
    </main>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container-fluid" style="background-image: url();background-size: 100% 100%;background-repeat: no-repeat;">
    <div class="container marketing pt-5">

        <div class="row ">
            <div class="col-lg-6 text-center">
                <img class="bd-placeholder-img " width="200" height="200" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                <h2 class="mt-4">Lunch</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="pricelist">See Menu</a> <a class="btn btn-secondary" href="#">Order Now &raquo;</a> </p>
            </div>

            <div class="col-lg-6 text-center ">

                <img class="bd-placeholder-img " width="200" height="200" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                <h2 class="mt-4">Dinner</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" href="pricelist">See Menu</a> <a class="btn btn-secondary" href="#">Order Now &raquo;</a> </p>
            </div>
        </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                    <div id="imgarticle" class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" width="500" height="500" src="{{ asset('assets/images/image1.jpg') }}" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <p class="text-center featurette-heading my-0 headertesti">Testimoni</p>
        <div id="Testimoni" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner testicontent">
                <div class="carousel-item active">
                    <h2 class="testitittle">Oomaygaddddd adawdawdaw <span class="text-muted">See for yourself.</span></h2>
                    <p class="captiontesti">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>

                </div>
                <div class="carousel-item">
                    <h2 class="testitittle">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="captiontesti">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>

                </div>
                <div class=" carousel-item">
                    <h2 class="testitittle">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="captiontesti">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>

                </div>

            </div>
            <a class="carousel-control-prev " href="#Testimoni" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Testimoni" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

</div>

<!-- FOOTER -->
@include('templates.customers.footer')
<script>
    var mq = window.matchMedia("(max-width: 40em)");
    $(document).ready(function() {
        if (!mq.matches) {
            $("nav").css("background-color", "transparent");
            $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                    $("nav").css("transition", "background-color 200ms linear");
                    $("nav").css("background-color", "#f1bbbc"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else {
                    $("nav").css("background-color", "transparent"); // if not, change it back to transparent
                }
            });
        } else {
            $("nav").css("background-color", "#f1bbbc");
        }
    });
</script>