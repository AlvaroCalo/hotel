<?php
function loadNavbar()
{
?>
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
                        <a class="nav-link" href="index.php">Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guest-rooms.php">Guest Rooms</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="serviceClass">Services</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="menu.php">Menu</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sansebastian.php">San Sebastián</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Book a room</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= End navbar ======= -->
<?php
} // end loadNavBar()
?>

<?php
function loadFooter()
{
?>
    <!-- ======= Footer ======= -->
    <footer class="d-flex justify-content-center" id="footer">
        <div class="text-center">
            <h3>Santa Clara Hotel</h3>
            <p>The best hotel in San Sebastian, come to visit us!</p>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div>&copy; Copyright <strong>Santa Clara Hotel - <a href="legal.php">Legal notice</a></strong></div>
        </div>
    </footer>
    <!-- ======= End footer ======= -->

    <script>
        /*    https://stackoverflow.com/questions/17975922/how-to-change-active-class-while-click-to-another-link-in-bootstrap-use-jquery*/
        $(document).ready(function() {
            console.log("navbar readyd");
            $(".serviceClass").click(function() {
                window.location = "services.php";
                console.log("navbar loaded!");
            });
        });
    </script>
<?php
} // end loadFooter()
?>