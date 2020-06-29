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

    <!-- ======= Navbar ======= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
            <img id="navbarLogo" class="navbar-brand" alt="Hotel Logo" src="../img/logo.png" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.html">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guest-rooms.html">Guest Rooms</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="serviceClass">Services</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="menu.html">Menu</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sansebastian.html">San Sebastián</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.html">Book a room</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= End navbar ======= -->

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
                        <a href="#" class="btn btn-primary">Check out our menu</a>
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
                        <a href="#" class="btn btn-primary">Book now!</a>
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
                        <a href="#" class="btn btn-primary">View services</a>
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
                <p>Santa Clara hotel is a classy hotel in San Sebastian. We have 65 rooms, all of them with balcony or windows</p>
                <ul>
                    <li>50 standard rooms</li>
                    <li>15 deluxe rooms</li>
                </ul>
            </div>
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

        <section class="row">
            <div class="col-12">
                <a href="sansebastian.html">
                    <h6 class="text-center">Visit San Sebastian</h6>
                </a>
                <a href="sansebastian.html"><img class="w-100" src="../img/misc/Panorama_from_Monte_Igueldo_(5106955283).jpg" alt="San Sebastian panorama" /></a>
            </div>
        </section>
    </main>
    <!-- ======= End main ======= -->

    <!-- ======= Footer ======= -->
    <footer class="d-flex justify-content-center" id="footer">
        <div class="text-center">
            <h3>Santa Clara Hotel</h3>
            <p>The best hotel in San Sebastian, come to visit us!</p>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div>&copy; Copyright <strong>Santa Clara Hotel - <a href="legal.html">Legal notice</a></strong></div>
        </div>
    </footer>
    <!-- ======= End footer ======= -->

    <script>
        /*    https://stackoverflow.com/questions/17975922/how-to-change-active-class-while-click-to-another-link-in-bootstrap-use-jquery*/
        $(document).ready(function() {
            console.log("ready!");
            $(".serviceClass").click(function() {
                window.location = "services.html";
            });
        });
    </script>

</body>

</html>

</html>