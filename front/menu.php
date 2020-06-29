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
        <h3>Menu</h3>

        <p>
            Aliquam eget ipsum id lorem eleifend facilisis. Nullam et arcu sapien. Vestibulum magna nibh, bibendum sit amet vestibulum a, elementum at enim. Pellentesque efficitur porttitor nulla, in mollis lacus aliquet id. Ut consequat in risus eu vestibulum. Integer
            nec metus id mi rhoncus suscipit id vitae enim. Nunc maximus velit eget ante euismod, aliquam laoreet urna gravida. Aenean scelerisque tempor sem eu luctus. Fusce eget vestibulum dolor. Praesent enim sapien, faucibus vitae tempor nec, interdum
            non nibh. Donec consequat volutpat leo, quis luctus urna aliquet eu. Aliquam in fringilla sem, porttitor blandit leo. Aenean consequat congue tortor, ac aliquet elit pharetra ut.
        </p>

        <div class="row justify-content-center">
            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/alison-marras-GyV6SL_fKsI-unsplash.jpg" class="card-img-top" alt="Photo by Alison Marras on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Praesent consectetur</h5>
                        <p class="card-text">Sed suscipit lorem sem, vel porttitor est finibus sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/mark-deyoung-mjcJ0FFgdWI-unsplash.jpg" class="card-img-top" alt="Photo by Mark DeYoung on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Donec non</h5>
                        <p class="card-text">Ut justo dolor, placerat at placerat id, pulvinar id ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/joseph-gonzalez-fdlZBWIP0aM-unsplash.jpg" class="card-img-top" alt="Photo by Joseph Gonzalez on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Laoreet elementum</h5>
                        <p class="card-text">In ac pulvinar mauris. In augue leo, mattis eu turpis eu.</p>
                    </div>
                </div>
            </div>

            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/cayla1-w6ftFbPCs9I-unsplash.jpg" class="card-img-top" alt="Photo by Cayla1 on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Nunc imperdiet mauris</h5>
                        <p class="card-text">Phasellus auctor vel nisl consectetur bibendum.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/thomas-tucker-MNtag_eXMKw-unsplash.jpg" class="card-img-top" alt="Photo by Thomas Tucker on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Maecenas sit</h5>
                        <p class="card-text">Nulla vitae velit aliquam, finibus ex at, convallis ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 m-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="../img/menu/brooke-lark-nBtmglfY0HU-unsplash.jpg" class="card-img-top" alt="Photo by Brooke Lark on Unsplash">
                    <div class="card-body">
                        <h5 class="card-title">Cras rutrum felis</h5>
                        <p class="card-text">Maecenas convallis ultricies libero, nec consequat nisi maximus quis. </p>
                    </div>
                </div>
            </div>
        </div>



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