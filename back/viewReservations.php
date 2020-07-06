<?php
require_once("../phpfiles/functions.php");

# Post of admin.php
if (isset($_POST['btnViewR'])) {
    $ident = $_POST['txtId'];
}

require_once('../phpfiles/conexion.php');
// connection to the data base
$conexion = mysqli_connect($host, $user, $password, $db);
//Paso 3: Comprobar si conecta
if (mysqli_connect_errno()) {
    echo 'Error with the database connection';
    exit(); //die() 
}
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
    <link rel="stylesheet" href="../css/back.css" />
    <!-- JQuery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <table class="table m-5">
            <?php
            $sql = "SELECT reservations.id, rooms.roomName, users.email, reservations.arrival, reservations.departure 
            FROM reservations
            JOIN rooms ON rooms.id = reservations.roomId
            JOIN users ON users.id = reservations.userId
            WHERE reservations.id = ?";
            $pre = mysqli_prepare($conexion, $sql);
            if ($pre) {
                //4.2 vincular los parámetros con la sentencia
                mysqli_stmt_bind_param($pre, "i", $ident);

                //Paso 5: Ejecutar la consulta
                mysqli_stmt_execute($pre);

                //Paso 6: Vincular el resultado
                mysqli_stmt_bind_result($pre, $id, $roomName, $user, $arrival, $departure);

                //Paso 7: Iterar con los valores
                while (mysqli_stmt_fetch($pre)) {
            ?>

                    <tr>
                        <th>Id</th>
                        <td><?= $id; ?></td>
                    </tr>
                    <tr>
                        <th>Room Name</th>
                        <td><?= $roomName; ?></td>
                    </tr>
                    <tr>
                        <th>User</th>
                        <td><?= $user; ?></td>
                    </tr>
                    <tr>
                        <th>Arrival</th>
                        <td><?= $arrival; ?></td>
                    </tr>
                    <tr>
                        <th>Departure</th>
                        <td><?= $departure; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <div class="row text-center mb-5">
            <div class="col">
                <a href="admin.php" class="btn btn-info m-1">Return</a>
            </div>
        </div>

    </div>
    <?php
    //Paso 8: Liberar
    mysqli_stmt_close($pre);

    //Paso 9: Cerrar la conexión
    mysqli_close($conexion);
    ?>
</body>

</html>

</html>