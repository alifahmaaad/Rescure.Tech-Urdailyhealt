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
        <a class="text-white" href="../README.md">UrdailyHealth X RescuerTech</a>
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
                <p class="pb-2">Admin 1 : <a class="btn  btn-outline-light wa1" target="_blank" style="background-color: #25d366;" href="https://api.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 1</a></p>
                <p class="pb-2">Admin 2 : <a class="btn  btn-outline-light wa2" target="_blank" style="background-color: #25d366;" href="https://api.whatsapp.com/send/?phone=6282386984627&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 2</a></p>
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
                <h2 class="modal-title" id="orderlabel">Order</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Whatsapp -->
                <form action="/action_page.php">
                    <label for="Nama">Nama</label>
                    <input class="form-control mb-3" type="text" id="Nama" name="Nama" placeholder="Nama" aria-label="default input example">
                    <label for="alamatl">Alamat Lunch</label>
                    <input class="form-control mb-3" type="text" id="alamatl" name="alamatl" placeholder="Alamat Lunch" aria-label="default input example">
                    <label for="alamatd">Alamat Dinner</label>
                    <input class="form-control mb-3" type="text" id="alamatd" name="alamatd" placeholder="Alamat Dinner" aria-label="default input example">
                    <label for="nohp">No HP</label>
                    <input class="form-control mb-3" type="text" id="nohp" name="nohp" placeholder="No HP" aria-label="default input example">
                    <label for="ket">Keterangan</label>
                    <textarea class="form-control mb-3" type="text" id="ket" name="ket" placeholder="Keterangan" aria-label="default input example"></textarea>
                </form>
                <form class="pb-3">
                    <label>Lunch</label></br>
                    <label class="mr-3"><input type="checkbox" value="Senin" name="lunch"> Senin</label>
                    <label class="mr-3"><input type="checkbox" value="Selasa" name="lunch"> Selasa</label>
                    <label class="mr-3"><input type="checkbox" value="Rabu" name="lunch"> Rabu</label>
                    <label class="mr-3"><input type="checkbox" value="Kamis" name="lunch"> Kamis</label>
                    <label class="mr-3"><input type="checkbox" value="Jum'at" name="lunch"> Jum'at</label>
                </form>
                <form class="pb-3">
                    <label>Dinner</label></br>
                    <label class="mr-3"><input type="checkbox" value="Senin" name="dinner"> Senin</label>
                    <label class="mr-3"><input type="checkbox" value="Selasa" name="dinner"> Selasa</label>
                    <label class="mr-3"><input type="checkbox" value="Rabu" name="dinner"> Rabu</label>
                    <label class="mr-3"><input type="checkbox" value="Kamis" name="dinner"> Kamis</label>
                    <label class="mr-3"><input type="checkbox" value="Jum'at" name="dinner"> Jum'at</label>
                </form>

                <p class="pb-2">Order Via : <a class="btn  btn-outline-light wa1" target="_blank" style="background-color: #25d366;" href="https://api.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 1</a></p>
                <p class="pb-2">Order Via : <a class="btn  btn-outline-light wa2" target="_blank" style="background-color: #25d366;" href="https://api.whatsapp.com/send/?phone=6282386984627&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A%0AAlamat+lunch+%3A%0AAlamat+dinner+%3A%0ANo+HP+%3A%0AMenu+%3A+Lunch+%2F+Dinner%0A+++++++++++++Weekly+%2F+Daily%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0"><i class="fab fa-whatsapp"></i> Whatsapp 2</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".wa1").click(function() {
            let lunch = [];
            let dinner = [];
            let Nama = document.getElementById("Nama").value.replace(" ", "+");
            let Alamatl = document.getElementById("alamatl").value.replace(" ", "+");
            let Alamatd = document.getElementById("alamatd").value.replace(" ", "+");
            let nohp = document.getElementById("nohp").value.replace(" ", "+");
            let ket = document.getElementById("ket").value.replace(" ", "+").replace(/\r?\n/g, "%0A");

            $.each($("input[name='lunch']:checked"), function() {
                lunch.push($(this).val());
            });
            $.each($("input[name='dinner']:checked"), function() {
                dinner.push($(this).val());
            });
            if (screen.width < 720) {
                window.open("https://api.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A+" + Nama + "+%0AAlamat+lunch+%3A+" + Alamatl + "+%0AAlamat+dinner+%3A+" + Alamatd + "+%0ANo+HP+%3A+" + nohp + "+%0AMenu+Lunch+%3A+" + lunch.join(",+") + "+%0AMenu+Dinner+%3A+" + dinner.join(",+") + "+%0AKeterangan+%3A+" + ket + "%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0", '_blank');
            } else {
                window.open("https://web.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A+" + Nama + "+%0AAlamat+lunch+%3A+" + Alamatl + "+%0AAlamat+dinner+%3A+" + Alamatd + "+%0ANo+HP+%3A+" + nohp + "+%0AMenu+Lunch+%3A+" + lunch.join(",+") + "+%0AMenu+Dinner+%3A+" + dinner.join(",+") + "+%0AKeterangan+%3A+" + ket + "%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0", '_blank');

            }
        });
        $(".wa2").click(function() {
            let lunch = [];
            let dinner = [];
            let Nama = document.getElementById("Nama").value;
            let Alamatl = document.getElementById("alamatl").value;
            let Alamatd = document.getElementById("alamatd").value;
            let nohp = document.getElementById("nohp").value;
            let ket = document.getElementById("ket").value.replace(" ", "+").replace(/\r?\n/g, "%0A");

            $.each($("input[name='lunch']:checked"), function() {
                lunch.push($(this).val());
            });
            $.each($("input[name='dinner']:checked"), function() {
                dinner.push($(this).val());
            });
            if (screen.width < 720) {
                window.open("https://api.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A+" + Nama + "+%0AAlamat+lunch+%3A+" + Alamatl + "+%0AAlamat+dinner+%3A+" + Alamatd + "+%0ANo+HP+%3A+" + nohp + "+%0AMenu+Lunch+%3A+" + lunch.join(",+") + "+%0AMenu+Dinner+%3A+" + dinner.join(",+") + "+%0AKeterangan+%3A+" + ket + "%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0", '_blank');
            } else {
                window.open("https://web.whatsapp.com/send/?phone=6282289229300&text=Halo+Kak%2C+saya+mau+order%0A%0ANama+%3A+" + Nama + "+%0AAlamat+lunch+%3A+" + Alamatl + "+%0AAlamat+dinner+%3A+" + Alamatd + "+%0ANo+HP+%3A+" + nohp + "+%0AMenu+Lunch+%3A+" + lunch.join(",+") + "+%0AMenu+Dinner+%3A+" + dinner.join(",+") + "+%0AKeterangan+%3A+" + ket + "%0A%0Aps+%3A+order+maksimal+H-1+ya+kak%0A%0ATerimakasih&app_absent=0", '_blank');
            }
        });
    });
</script>

</body>

</html>