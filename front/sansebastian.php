<?php
require_once("../phpfiles/functions.php");
?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
    <meta charset="utf-8" />
    <title>Hilbert Hotel</title>
    <!-- metas -->
    <meta name="description" content="Hotel WebApp Proyect" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS:fontawesome, bootstrap, custom -->
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/front.css" />
    <!-- JQuery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    ?>

    <!-- ======= Carousel ======= -->
    <div id="carousel" class="carousel slide mb-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/misc/San_Sebastian_Donostia_Panoramic_1190583.jpg" class="d-block w-100 sliderImg" alt="Donostia panorama">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/donostia-2040819_1920.jpg" class="d-block w-100 sliderImg" alt="Raining in Donostia">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/san-sebastian2-1999686_1280.jpg" class="d-block w-100 sliderImg" alt="Coast line">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/Pasarela_en_el_Puerto_de_Donostia.jpg" class="d-block w-100 sliderImg" alt="Port">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ======= End carousel ======= -->

    <main>
        <section class="row align-items-center">
            <!-- Picture -->
            <div class="col-6 text-center">
                <img src="../img/misc/640px-San_Sebastian_Beach.jpg" alt="Donostia beach" class="w-50" />
            </div>
            <!-- End Picture -->
            <div class="col-4 text-center">
                <h5 class="p-3">Contact info</h5>
                <div class="row">
                    <div class="col">Phone number</div>
                    <div class="col">943 666 666 669</div>
                </div>
                <div class="row">
                    <div class="col">Fax</div>
                    <div class="col">943 666 666 966</div>
                </div>
                <div class="row">
                    <div class="col">E-mail</div>
                    <div class="col">generalservices@hilberthotel.eu</div>
                </div>
            </div>
        </section>

        <section class="row"></section>
    </main>

    <?php
    loadFooter();
    ?>

</body>

</html>

</html>