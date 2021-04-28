@include('templates.customers.header')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

<div class="container-fluid text-center" style="background-image: linear-gradient(180deg, #f1bbbc 30%, white);background-size: 100% 30%;background-repeat: no-repeat;" id="pricelist" style="padding-bottom: 40px;">
  <h1 style="padding-top:100px;padding-bottom:20px ;">Our Menu on This Week</h1>
  <div class="row">
    <!-- CAROUSEL IMG PRICELIST -->
    <!-- <div id="pricelistcarousel" class="col-lg-4 carousel slide  pricelistcontent pb-3" data-ride="carousel">
      <div class="carousel-indicators ">
        <li type="button" data-target="#pricelistcarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
        <li type="button" data-target="#pricelistcarousel" data-slide-to="1" aria-label="Slide 2"></li>
        <li type="button" data-target="#pricelistcarousel" data-slide-to="2" aria-label="Slide 3"></li>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img class="img-fluid mx-auto responsive d-block" width="600" src="{{ asset('assets/images/dummyprice.jpeg') }}" alt="">
        </div>
        <div class="carousel-item">
          <img class="img-fluid mx-auto responsive d-block" width="600" src="{{ asset('assets/images/dummyprice.jpeg') }}" alt="">

        </div>
        <div class="carousel-item ">
          <img class="img-fluid mx-auto responsive d-block" width="600" src="{{ asset('assets/images/dummyprice.jpeg') }}" alt="">
        </div>
      </div> -->
    <!-- <div class="carousel-caption text-start">
        <p style="margin-bottom: -10px;"><a class="btn btn-md btn-success" href="#">ORDER NOW</a></p>
      </div> -->
    <!-- </div> -->
    <!-- END CAROUSEL IMG PRICELIST -->

    <div class=" container pricelist mb-2 ">
      <!-- LUNCH -->
      <div class="row pt-0">
        <div class="container judul">
          <h2 class=" mb-2">Lunch</h2>
        </div>
        <div class="container">
          <div class="owl-carousel">
            @foreach($lunchs as $lunch)
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">{{ $lunch->day }}</h4>
                  <p class="card-text text-center">{{ $lunch->menu }} <br>
                    {{ $lunch->description }}
                    <br>
                    @currency($lunch->price )
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col"></div>
          </div>
        </div>
      </div>
      <!-- END LUNCH -->
      <!-- DINNER -->
      <div class="row">
        <div class="container judul">
          <h2 class=" mb-2">Dinner</h2>
        </div>
        <div class="container">
          <div class="owl-carousel">
            @foreach($dinners as $dinner)
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">{{ $dinner->day }}</h4>
                  <p class="card-text text-center">{{ $dinner->menu }} <br>
                    {{ $dinner->description }}
                    <br>
                    @currency($dinner->price )
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col"></div>
          </div>
        </div>
      </div>
      <!-- END DINNER -->
    </div>

  </div>
</div>


<!-- Script -->
<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop: false,
    dots: false,
    nav: true,
    responsiveClass: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false
      }
    }
  })
</script>
@include('templates.customers.footer')