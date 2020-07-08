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


    <main class="container">
        <!-- ============= Map ==============-->
        <div class="row">
            <div class="col-8 p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.972892752157!2d-1.9927576850912891!3d43.314826882264036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE4JzUzLjQiTiAxwrA1OScyNi4xIlc!5e0!3m2!1ses!2ses!4v1593452135673!5m2!1ses!2ses" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
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
                    In the middle of the city, the location is unique anywhere in the world.
                    <ul>Distances to marvellous places:
                        <li>23,12 meter to the Santa Clara Island</li>
                        <li>10 minutes by boat to the City Center</li>
                        <li>20 minutes swimming to the best beach in the world</li>
                    </ul>
                </p>
            </div>
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
        </div>
        </div>
    </main>

    <?php
    loadFooter();
    ?>

    <script>
        $(document).ready(function() {
            //console.log("ready");
            // adds the active class to the select page in the navbar
            $('[href*="index.php"]').removeClass('active');
            $('[href*="location.php"]').addClass('active');

        });
    </script>

</body>

</html>

</html>