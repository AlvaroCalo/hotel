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
        <section class="row text-center m-5">
            <div class="col-6" id="login">
                <h4>Log in</h4>
                <form>
                    <div class="form-group">
                        <label for="txtEmailL">Email address</label>
                        <input type="email" class="form-control" id="txtEmailL" name="txtEmailL">
                    </div>
                    <div class="form-group">
                        <label for="txtPasswordL">Password</label>
                        <input type="password" class="form-control" id="txtPasswordL" name="txtPasswordL">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6" id="sign-in">
                <h4>Sign in</h4>
                <form>
                    <div class="form-group">
                        <label for="txtEmailS">Email address</label>
                        <input type="email" class="form-control" id="txtEmails" name="txtEmailS">
                    </div>
                    <div class="form-group">
                        <label for="txtPasswordS">Password</label>
                        <input type="password" class="form-control" id="txtPasswordS" name="txtPasswordS">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </main>

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