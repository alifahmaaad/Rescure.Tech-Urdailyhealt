@include('templates.customers.header')

<div class="container-fluid " style="padding-top: 98px;">
    <div class="container pt-5 text-center aboutus">
        <img class="bd-placeholder-img rounded-circle" width="300" height="300" src="{{ asset('assets/images/logo.jpg') }}" alt="">
        <h1 class="mt-4 aboutustittle pb-3">Urdaily Health</h1>
        <h3>Visi</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur consequatur incidunt ut, nam, et excepturi cupiditate deserunt quos dolorem tempora error maxime hic sapiente recusandae neque. Commodi suscipit quo consequuntur.</p>
        <h3>Misi</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima dicta provident voluptatem tempora, incidunt commodi, perferendis aperiam ullam nobis ex exercitationem molestias, ad sint eius saepe officiis quae hic. Unde.</p>
        <h3>Sejarah</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum expedita sit earum dolorem soluta temporibus natus illo nostrum. Fugiat consequuntur nemo vitae temporibus aut omnis doloremque eligendi perferendis aliquam esse.</p>
        <h3>Contact</h3>
        <div class="contact">
            <p><a class="btn  btn-outline-light " style="background-color: #25d366;" href="#!" role="button" data-toggle="modal" data-target="#testss"><i class="fab fa-whatsapp"></i> Whatsapp</a></p>
            <!-- Instagram -->
            <p><a class="btn btn-outline-light  " style="background-image: url({{ asset('assets/images/igbg.jpg') }});background-size: cover" href="https://www.instagram.com/urdailyhealth/" target="_blank" role="button"><i class="fab fa-instagram"></i> Instagram</a></p>
        </div>
    </div>
</div>

</div>

<!-- FOOTER -->
@include('templates.customers.footer')