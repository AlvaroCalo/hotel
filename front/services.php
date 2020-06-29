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


    <main>
        <section class="row">
            <div class="col-4">
                <img class="w-75 m-5" src="../img/misc/adi-goldstein-eNwPokqVAn0-unsplash.jpg" alt="Services" />
            </div>
            <div class="col-4 mt-5">
                <ul>
                    <h6>Services</h6>
                    <li>The fastes Internet connection in the world</li>
                    <li>Beach in fron of your room - 150 cm</li>
                    <li>Jacuzzi&trade; without farting</li>
                    <li>Burger King service in your room</li>
                    <li>Garage if you dare to bring your car</li>
                    <li>Dry cleaning and laundry for the most flirtatious</li>
                    <li>Pets Allowed (we have a sea water Aquarium for them)</li>
                </ul>
            </div>
            <div class="col-4 mt-5">
                <!-- Check availability -->
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
                <!-- End Check availability -->
            </div>
            <div class="row">
                <div class="col-4">
                    <img class="w-75 m-5" src="../img/misc/grandbeau-vinHzZDBYvo-unsplash.jpg" alt="Social room" />
                </div>
                <div class="col-4">
                    <img class="w-75 m-5" src="../img/misc/carolina-marinelli-PkbyxvkGWcU-unsplash.jpg" alt="Cafeteria" />
                </div>
                <div class="col-4">
                    <img class="w-75 m-5" src="../img/misc/risen-wang-20jX9b35r_M-unsplash.jpg" alt="Gym" />
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