@include('templates.customers.header')
<div class="paddingheader" style="background-image: linear-gradient(180deg, #f1bbbc 80%, white);background-size: 100% 100%;background-repeat: no-repeat;">
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
                    <img class="responsive" src="{{ asset('assets/images/urdailyhealth.png') }}" alt=""></img>
                    <!-- <div class="container">
                        <div class="carousel-caption text-start">
                            <h2>Example headline.</h2>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-md btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div> -->
                </div>
                <div id="headcarousel" class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#fff" />
                    </svg>
                    <img class="responsive" src="" alt="">
                    <div class="container">
                    </div>
                </div>
                <div id="headcarousel" class="carousel-item ">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#fff" />
                    </svg>

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
                <img class="bd-placeholder-img border rounded" width="200" height="200" src="{{ asset('assets/images/urdailyhealth.png') }}" alt="">
                <h2 class="mt-4">Tomorrow Lunch</h2>
                @foreach($lunchs as $lunch)
                <p>{{ $lunch->description }}</p>
                <p>@currency($lunch->price )</p>
                @endforeach
                <p><a class="btn btn-secondary" href="pricelist">See Menu</a> <a class="btn btn-secondary" href="#!" role="button" data-toggle="modal" data-target="#ordermodal">Order Now &raquo;</a> </p>
            </div>

            <div class="col-lg-6 text-center ">

                <img class="bd-placeholder-img border rounded" width="200" height="200" src="{{ asset('assets/images/urdailyhealth.png') }}" alt="">
                <h2 class="mt-4">Tomorrow Dinner</h2>
                @foreach($dinners as $dinner)
                <p>{{ $dinner->description }}</p>
                <p>@currency($dinner->price)</p>
                @endforeach
                <p><a class="btn btn-secondary" href="pricelist">See Menu</a> <a class="btn btn-secondary" href="#!" role="button" data-toggle="modal" data-target="#ordermodal">Order Now &raquo;</a> </p>
            </div>
        </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        @foreach($articles as $article)
        @if($loop->odd )
        <div class="row featurette">
            <div class="col-md-8 order-md-1">
                <h2 class="featurette-heading">{{ $article->title }}</h2>
                <p class="lead">{{ $article->content }}</p>
            </div>
            <div class="col-md-4 order-md-2">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" src="{{ asset($article->thumbnail) }}" alt="">
            </div>
        </div>

        <hr class="featurette-divider">
        @else
        <div class="row featurette">
            <div class="col-md-8 order-md-2">
                <h2 class="featurette-heading">{{ $article->title }}</h2>
                <p class="lead">{{ $article->content }}</p>
            </div>
            <div class="col-md-4 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto responsive" src="{{ asset($article->thumbnail) }}" alt="">
            </div>
        </div>
        <hr class="featurette-divider">
        @endif
        @endforeach

        <p class="text-center featurette-heading my-0 headertesti">Testimoni</p>
        <div id="Testimoni" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner testicontent">
                @foreach($testi as $testimoni)
                <div class="carousel-item ">
                    <h2 class="testitittle">{{$testimoni->nama}}</h2>
                    <p class="captiontesti">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>

                </div>
                @endforeach
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