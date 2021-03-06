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
    <link rel="stylesheet" href="../alertify/css/alertify.min.css" />
    <link rel="stylesheet" href="../cookiealert/cookiealert.css" />
    <link rel="stylesheet" href="../css/front.css" />
    <!-- JQuery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../alertify/alertify.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    ?>

    <!-- ======= Carousel ======= -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slider/marten-bjork-n_IKQDCyrG0-unsplash2.jpg" class="d-block w-100 sliderImg" alt="Hotel facade">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beautiful Art déco hotel</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/slider/olexandr-ignatov-w72a24brINI-unsplash2.jpg" class="d-block w-100 sliderImg" alt="Hotel rooms">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Amazing rooms</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/slider/jonas-jacobsson-1iTKoFJvJ6E-unsplash2.jpg" class="d-block w-100 sliderImg" alt="Social room">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Social room</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/slider/dylan-nolte--D09rH5sTw4-unsplash2.jpg" class="d-block w-100 sliderImg" alt="General services">
                <div class="carousel-caption d-none d-md-block">
                    <h5>General services</h5>
                </div>
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

    <!-- ======= Main ======= -->
    <main class="container p-5">

        <section class="row p-5">
            <!-- First card -->
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="../img/cards/ronan-kruithof-llcX9pTjhXM-unsplash.jpg" class="card-img-top" alt="Our chef">
                    <div class="card-body">
                        <h5 class="card-title">Complete meal services</h5>
                        <p class="card-text">We stole our chef from the best restaurant in the country.</p>
                        <a href="menu.php" class="btn btn-primary">Check out our menu</a>
                    </div>
                </div>
            </div>
            <!-- End First card -->
            <!-- Second card -->
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="../img/cards/elena-koycheva-bGeupv246bM-unsplash.jpg" class="card-img-top" alt="Book a room!">
                    <div class="card-body">
                        <h5 class="card-title">Book a room</h5>
                        <p class="card-text">We run the very best hotel in the city. Period.</p>
                        <a href="reservation.php" class="btn btn-primary">Book now!</a>
                    </div>
                </div>
            </div>
            <!-- End Second card -->
            <!-- Thrid card -->
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="../img/cards/roberto-nickson-RiOhen_OLPs-unsplash.jpg" class="card-img-top" alt="Our services">
                    <div class="card-body">
                        <h5 class="card-title">Services</h5>
                        <p class="card-text">Our services have the label ISO 69. Your safety is important to us.</p>
                        <a href="services.php" class="btn btn-primary">View services</a>
                    </div>
                </div>
            </div>
            <!-- End Thrid card -->
        </section>

        <section class="row">
            <div class="col-4">
                <img class="w-100" src="../img/misc/humphrey-muleba-8V7Ny9B2Siw-unsplash.jpg" alt="Book a room for good sake!" />
            </div>
            <div class="col-4">
                <p>Hilbert hotel is a classy hotel in San Sebastian. </p>
                <ul>
                    <li>50 standard rooms</li>
                    <li>15 deluxe rooms</li>
                </ul>
            </div>
            <div class="col-4 text-center">
                <a class="twitter-timeline" data-width="500" data-height="300" href="https://twitter.com/edusadeci?ref_src=twsrc%5Etfw">Tweets by edusadeci</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </section>

        <section class="row">
            <div class="col-12">
                <a href="sansebastian.php">
                    <h6 class="text-center">Visit San Sebastian</h6>
                </a>
                <a href="sansebastian.php"><img class="w-100" src="../img/misc/Panorama_from_Monte_Igueldo_(5106955283).jpg" alt="San Sebastian panorama" /></a>
            </div>
        </section>
    </main>
    <!-- ======= End main ======= -->
    <div class="alert alert-dismissible text-center cookiealert" role="alert">
        <div class="cookiealert-container">
            <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="http://cookiesandyou.com/" target="_blank">Learn more</a>

            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                I agree
            </button>
        </div>
    </div>
    <?php
    loadFooter();
    ?>

    <!-- Coockie alert -->
    <script src="../cookiealert/cookiealert.js"></script>

    <script>
        $(document).ready(function() {
            //console.log("ready");
            window.addEventListener("cookieAlertAccept", function() {
                alertify.alert("Hilbert Hotel", "You have accepted the cookies. Have fun!", function() {
                    });
            })
        });
    </script>

</body>

</html>

</html>