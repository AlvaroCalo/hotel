<?php
require_once("../phpfiles/functions.php");
?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
    <meta charset="utf-8" />
    <title>Santa Clara - Hotel</title>
    <!-- metas -->
    <meta name="description" content="Hotel WebApp Proyect" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS:fontawesome, bootstrap, custom -->
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
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
            <!-- Check availability -->
            <div class="col-4 text-center">
                <h5>Book a room</h5>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="arrivalDate" class="card-subtitle mb-2 text-muted">Arrival</label>
                        <input type="datetime-local" name="arrivalDate" id="arrivalDate" />
                    </div>
                    <div class="form-group">
                        <label for="nights" class="card-subtitle mb-2 text-muted">Nights</label>
                        <input type="number" name="nights" id="nights" />
                    </div>
                    <input type="submit" value="Search!" class="btn btn-primary" />
                </form>
            </div>
            <!-- End Check availability -->
        </section>

        <section class="row"></section>
    </main>

    <?php
    loadFooter();
    ?>

</body>

</html>

</html>