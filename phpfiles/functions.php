<?php
// connection variables
include_once 'conexion.php';
?>

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
            <h3>Hilbert Hotel</h3>
            <p>The best hotel in San Sebastian, come to visit us!</p>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div>&copy; Copyright <strong>Hilbert Hotel - <a href="legal.php">Legal notice</a></strong></div>
        </div>
    </footer>
    <!-- ======= End footer ======= -->

    <script>
        /*    https://stackoverflow.com/questions/17975922/how-to-change-active-class-while-click-to-another-link-in-bootstrap-use-jquery*/
        $(document).ready(function() {
            $(".serviceClass").click(function() {
                window.location = "services.php";
            });
        });
    </script>
<?php
} // end loadFooter()
?>

<?php
function doLogin()
{
    global $host, $user, $password, $db, $conexion;
    // me conecto a la bd
    $conexion = mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die() aquí detiene el flujo de base de datos debajo pero lo demás lo hace (QUIERO PROBARLA mucho)
    }

    $myusername = mysqli_real_escape_string($conexion, $_POST['txtEmailL']);
    $mypassword = mysqli_real_escape_string($conexion, $_POST['txtPasswordL']);

    $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";

    $pre = mysqli_query($conexion, $sql);

    $count = mysqli_num_rows($pre);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        header("location: ../back/index.php");
    } else {
?>
        <div class="alert alert-danger" role="alert">
            Try again.
        </div>
<?php
    }
}
?>