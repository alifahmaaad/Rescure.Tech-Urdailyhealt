@include('templates.customers.header')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

<div class="container-fluid text-center" id="pricelist" style="padding-top: 90px;padding-bottom: 40px;">
  <h1 style="padding-bottom:20px ;">Our Menu On this Week</h1>
  <div class="row">
    <!-- CAROUSEL IMG PRICELIST -->
    <div id="pricelistcarousel" class="col-lg-3 carousel slide  pricelistcontent pb-3" data-ride="carousel">
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
      </div>
      <!-- <div class="carousel-caption text-start">
        <p style="margin-bottom: -10px;"><a class="btn btn-md btn-success" href="#">ORDER NOW</a></p>
      </div> -->
    </div>
    <!-- END CAROUSEL IMG PRICELIST -->

    <div class="col-lg-6 container pricelist mb-2 ">
      <!-- LUNCH -->
      <div class="row pt-0">
        <div class="container judul">
          <h2 class=" mb-2">Lunch</h2>
        </div>
        <div class="container">
          <div class="owl-carousel">
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Senin</h4>
                  <p class="card-text text-center">Bubur Ayam <br>
                    395 kkal | 27.69 Protein
                    <br>
                    Rp. 10.000
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title ">Selasa</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Rabu</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Kamis</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Jum'at</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
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
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Senin</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Selasa</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Rabu</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Kamis</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-body">
                  <h4 class="card-title">Jum'at</h4>
                  <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
      <!-- END DINNER -->
    </div>
    <!-- CAROUSEL IMG PRICELIST -->
    <div id="pricelistcarousel2" class="col-lg-3 carousel slide pricelistcontent" data-ride="carousel">
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
      </div>
      <!-- <div class="carousel-caption text-start">
        <p style="margin-bottom: -10px;"><a class="btn btn-md btn-success" href="#">ORDER NOW</a></p>
      </div> -->
    </div>
    <!-- END CAROUSEL IMG PRICELIST -->
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
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  })
</script>
@include('templates.customers.footer')