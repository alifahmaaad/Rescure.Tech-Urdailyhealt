@include('templates.customers.header')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

<div class="container text-center" id="pricelist">
  <div style="padding-top: 70px;">
    <!-- CAROUSEL IMG PRICELIST -->
    <div id="pricelistcarousel" class="carousel slide py-5 pricelistcontent" data-ride="carousel">
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


      <a class="carousel-control-prev" role="button" href="#pricelistcarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" role="button" href="#pricelistcarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden sr-only">Next</span>
      </a>
      <!-- <div class="carousel-caption text-start">
        <p style="margin-bottom: -10px;"><a class="btn btn-md btn-success" href="#">ORDER NOW</a></p>
      </div> -->
    </div>
    <!-- END CAROUSEL IMG PRICELIST -->
    <div class="container pricelist border rounded mb-2 ">
      <!-- LUNCH -->
      <div class="row">
        <div class="container judul">
          <h2 class=" my-2">Lunch</h2>
        </div>
        <div class="container">
          <div class="owl-carousel">
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Senin
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Selasa
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Rabu
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  kamis
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Jum'at
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END LUNCH -->
      <!-- DINNER -->
      <div class="row">
        <div class="container judul">
          <h2 class=" my-2">Dinner</h2>
        </div>
        <div class="container">
          <div class="owl-carousel">
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Senin
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Selasa
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Rabu
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  kamis
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class=" card  mb-2">
                <div class="card-header">
                  Jum'at
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END DINNER -->
    </div>
  </div>
</div>


<!-- Script -->
<script>
  $('.owl-carousel').owlCarousel({
    loop: false,
    dots: false,
    margin: 10,
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