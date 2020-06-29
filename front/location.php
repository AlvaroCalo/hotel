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


    <main class="container">
        <!-- ============= Map ==============-->
        <div class="row">
            <div class="col-8 p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11610.839074870992!2d-1.9975577!3d43.3203347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE5JzE3LjAiTiAxwrA1OSc1OC4wIlc!5e0!3m2!1ses!2ses!4v1592826066691!5m2!1ses!2ses" width="1100"
                    height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
        <!-- ============= End Map ==============-->

        <div class="row">
            <div class="col-4">
                <img src="../img/misc/city-of-donostia-san-sebastian-3759619_640.jpg" alt="Donostia City" class="w-75" />
            </div>
            <div class="col-4">
                <p>
                    In the middle of Concha Bay, the location is unique anywhere in the world.
                    <ul>Distances to marvellous places:
                        <li>0 meter to the Santa Clara Island</li>
                        <li>10 minutes by boat to the City Center</li>
                        <li>20 minutes swimming to the best beach in the world</li>
                    </ul>
                </p>
            </div>
            <div class="col-4 text-center">
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
                <!--                 <h5 class="p-3">Contact info</h5>
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
                    <div class="col">generalservices@santaclara.eu</div>
                </div> -->
            </div>
        </div>
        </div>
    </main>

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
    <!-- ======= End Footer ======= -->

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