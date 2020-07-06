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
                    <li class="nav-item">
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

    session_start();
    global $host, $user, $password, $db, $conexion;
    // me conecto a la bd
    $conexion = mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die() aquí detiene el flujo de base de datos debajo pero lo demás lo hace (QUIERO PROBARLA mucho)
    }

    $myusername = mysqli_real_escape_string($conexion, $_POST['txtEmailL']);
    $mypassword = mysqli_real_escape_string($conexion, $_POST['txtPasswordL']);

    $sql = "SELECT id, rol FROM users WHERE email = ? and password = ? ";

    # Preparo la consulta
    $pre = mysqli_prepare($conexion, $sql);
    # indico los datos a reemplazar con su tipo
    mysqli_stmt_bind_param($pre, "ss", $myusername, $mypassword);
    # Ejecuto la consulta
    mysqli_stmt_execute($pre);
    # asocio los nombres de campo a nombres de variables
    mysqli_stmt_bind_result($pre, $id, $rol);
    # Capturo los resultados y los guardo en un array
    $registros = null;
    while (mysqli_stmt_fetch($pre)) {
        $registros = array(
            'user' => $id,
            'rol' => $rol
        );
    }

    if ($registros != null) {
        $_SESSION['loggedin'] = true;
        if ($registros['rol'] == 'admin') {
            $_SESSION['rol'] = 'admin';
            $_SESSION['user'] = $registros['user'];
        } else {
            $_SESSION['rol'] = 'client';
            $_SESSION['user'] = $registros['user'];
        }
        // header('Location:index.php');
    }


    $sql2 = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";

    $preT = mysqli_query($conexion, $sql2);

    $count = mysqli_num_rows($preT);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        header("location: ../front/asignRol.php");
    } else {
?>
        <div class="alert alert-danger" role="alert">
            Try again.
        </div>
<?php
    }
}
?>

<?php
function giveReservedRoomId($id)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $connT = mysqli_connect($host, $user, $password, $db);
    #Tengo que hacer una select para sacar los id de los tipos
    //Paso 3: Comprobar si conecta
    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die()
    }
    $sqlT = "SELECT roomId FROM reservations WHERE id = ?";
    $preT = mysqli_prepare($connT, $sqlT);
    mysqli_stmt_bind_param($preT, "i", $id);
    mysqli_stmt_execute($preT);
    mysqli_stmt_bind_result($preT, $roomId);

    while (mysqli_stmt_fetch($preT)) {
        $devuelve = $roomId;
    }
    json_encode($devuelve);

    //Paso 8: Liberar
    mysqli_stmt_close(($preT));

    //Paso 9: Cerrar la conexión
    mysqli_close($connT);

    return $devuelve;
}
?>

<?php
function giveReservedUSerId($id)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $connT = mysqli_connect($host, $user, $password, $db);
    #Tengo que hacer una select para sacar los id de los tipos
    //Paso 3: Comprobar si conecta
    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die()
    }
    $sqlT = "SELECT userId FROM reservations WHERE id = ?";
    $preT = mysqli_prepare($connT, $sqlT);
    mysqli_stmt_bind_param($preT, "i", $id);
    mysqli_stmt_execute($preT);
    mysqli_stmt_bind_result($preT, $userId);

    while (mysqli_stmt_fetch($preT)) {
        $devuelve = $userId;
    }
    json_encode($devuelve);

    //Paso 8: Liberar
    mysqli_stmt_close(($preT));

    //Paso 9: Cerrar la conexión
    mysqli_close($connT);

    return $devuelve;
}
?>

<?php
function checkUser($userCheck)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $connT = mysqli_connect($host, $user, $password, $db);
    #Tengo que hacer una select para sacar los id de los tipos
    $devuelve = '';
    //Paso 3: Comprobar si conecta
    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die()
    }
    $sqlT = "SELECT email FROM users WHERE email = ?";
    $preT = mysqli_prepare($connT, $sqlT);
    mysqli_stmt_bind_param($preT, "s", $userCheck);
    mysqli_stmt_execute($preT);
    mysqli_stmt_bind_result($preT, $userMail);

    if (mysqli_stmt_fetch($preT) == 1) {
        return true;
    } else {
        return false;
    }
    //Paso 8: Liberar
    mysqli_stmt_close(($preT));

    //Paso 9: Cerrar la conexión
    mysqli_close($connT);

    return $devuelve;
}
?>

<?php
function addUser($userMail, $userPassword, $userPhone, $userStreet, $userPostal, $userCity, $userCountry)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $conn = mysqli_connect($host, $user, $password, $db);
    # Preparo la sentencia con los comodines ?
    $sql = "INSERT INTO users (password, email, tel, streetName, postalCode, city, country, rol) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    # Preparo los datos que voy a insertar
    $rol = 'client';
    # Preparo la consulta
    $pre = mysqli_prepare($conn, $sql);
    # indico los datos a reemplazar con su tipo
    mysqli_stmt_bind_param($pre, "ssisisss", $userPassword, $userMail, $userPhone, $userStreet, $userPostal, $userCity, $userCountry, $rol);
    # Ejecuto la consulta
    mysqli_stmt_execute($pre);
    # PASO OPCIONAL (SOLO PARA CONSULTAS DE INSERCIÓN):
    # Obtener el ID del registro insertado
    $nuevo_id = mysqli_insert_id($conn);
    # Cierro la consulta y la conexión
    mysqli_stmt_close($pre);
    mysqli_close($conn);
}
?>