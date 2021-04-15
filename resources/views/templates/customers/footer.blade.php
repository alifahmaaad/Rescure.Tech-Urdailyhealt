<footer class="bg-light text-center text-white  sticky-bottom">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="contact-footer">
            <a style="color:#335343;"><i>Contact Us :</i></a>
            <!-- Google -->
            <a class="btn  btn-outline-light  rounded-circle" style="background-color: #25d366;" href="#!" role="button" data-toggle="modal" data-target="#wamodal"><i class="fab fa-whatsapp"></i></a>
            <!-- Instagram -->
            <a class="btn btn-outline-light rounded-circle  " style="background-image: url({{ asset('assets/images/igbg.jpg') }});background-size: cover" href="https://www.instagram.com/urdailyhealth/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="#">UrdailyHealth X RescuerTech</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- MODAL CONTACT -->

<div class="modal fade" id="wamodal" tabindex="-1" role="dialog" aria-labelledby="walabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="walabel">Whatsapp Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <li style="list-style-type: none;">Admin 1 : <a style="float:right" class="btn btn-success btn-sm rounded-pill " href="https://web.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0" target="_blank">Contact</a></li>
                </br>
                <li style="list-style-type: none;">Admin 2 : <a style="float:right" class="btn btn-success btn-sm rounded-pill " href="https://web.whatsapp.com/send/?phone=6282386984627&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0" target="_blank">Contact</a></li>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ORDER -->

<div class="modal fade" id="ordermodal" tabindex="-1" role="dialog" aria-labelledby="orderlabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderlabel">Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Whatsapp -->
                <p>Order Via : <a class="btn  btn-outline-light " style="background-color: #25d366;" href="https://web.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 1</a></p>
                <p>Order Via : <a class="btn  btn-outline-light " style="background-color: #25d366;" href="https://web.whatsapp.com/send/?phone=6282386984627&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 2</a></p>
                <!-- Instagram -->
                <p>Order Via : <a class="btn btn-outline-light  " style="background-image: url({{ asset('assets/images/igbg.jpg') }});background-size: cover" href="https://www.instagram.com/urdailyhealth/" target="_blank" role="button"><i class="fab fa-instagram"></i> Instagram</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>