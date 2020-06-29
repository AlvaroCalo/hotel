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

    <footer class="d-flex justify-content-center mt-3" id="footer">
        <div class="text-center">
            <h3>Santa Clara Hotel</h3>
            <p>The best hotel in San Sebastian, come to visit us!</p>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div>&copy; Copyright <strong>Santa Clara Hotel - <a href="legal.html">Legal notice</a></strong></div>
        </div>
    </footer>

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