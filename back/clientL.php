<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../front/reservation.php');
} elseif ($_SESSION['rol'] == 'admin') {
    header('Location: ../back/admin.php');
}

require_once("../phpfiles/functions.php");

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
    <!-- CSS:fontawesome, bootstrap, alertify custom -->
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../alertify/css/alertify.min.css" />
    <link rel="stylesheet" href="../css/back.css" />
    <!-- JQuery, alertify, bootstrap bundle -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../alertify/alertify.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    /* echo $_SESSION['user']; */
    ?>

    <div class="container">
        <!--         <div class="row">
            <a href="#clientInfo">Go to your personal info</a>
        </div>
        <div class="row">
            <a href="#reservationInfo">Go to reservations info</a>
        </div> -->

        <main class="container-fluid">
            <section class="row m-3">
                <div class="col">
                    <h3 id="clientInfo" class="text-center">Your info</h3>
                    <table class="table">

                        <?php
                        $id = $_SESSION['user'];
                        $sql = "SELECT email, password, tel, streetName, postalCode, city, country FROM users WHERE id = ?";
                        $pre = mysqli_prepare($conexion, $sql);
                        mysqli_stmt_bind_param($pre, "i", $id);
                        mysqli_stmt_execute($pre);
                        mysqli_stmt_bind_result($pre, $email, $password, $tel, $streetName, $postalCode, $city, $country);

                        //Paso 7: Iterar con los valores
                        while (mysqli_stmt_fetch($pre)) {
                        ?>
                            <tr>
                                <th>E-mail</th>
                                <td><?= $email ?></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><?= $password ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?= $tel ?></td>
                            </tr>
                            <tr>
                                <th>Street name</th>
                                <td><?= $streetName ?></td>
                            </tr>
                            <tr>
                                <th>Postal code</th>
                                <td><?= $postalCode ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?= $city ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?= $country ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <!-- <th>Update info</th> -->
                            <td colspan="2" class="text-center">
                                <form action="updateUserL.php" method="POST">
                                    <input type="hidden" id="txtId" name="txtId" value="<?= $id; ?>" />
                                    <input type="hidden" id="txtPass" name="txtPass" value="<?= $password; ?>" />
                                    <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $email; ?>" />
                                    <input type="hidden" id="txtTel" name="txtTel" value="<?= $tel; ?>" />
                                    <input type="hidden" id="txtStreet" name="txtStreet" value="<?= $streetName; ?>" />
                                    <input type="hidden" id="txtPostalCode" name="txtPostalCode" value="<?= $postalCode; ?>" />
                                    <input type="hidden" id="txtCity" name="txtCity" value="<?= $city; ?>" />
                                    <input type="hidden" id="txtCountry" name="txtCountry" value="<?= $country; ?>" />
                                    <button type="submit" id="btnEditar<?= $id; ?>" name="btnEdit" class="btn btn-warning">Update</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <h3 id="reservationInfo" class="text-center">Reservations list <span><a class="btn" href="addReservationL.php">Add reservation</a></span> </h3>
                    <table class="table">
                        <tr>
                            <th>Room</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        <?php
                        $sql = "SELECT reservations.id, rooms.roomName, reservations.arrival, reservations.departure
                                FROM reservations
                                JOIN users ON users.id = reservations.userId
                                JOIN rooms ON rooms.id = reservations.roomId
                                where users.id = $id
                                ORDER BY reservations.id";
                        //4.1 preparar la sentencia
                        $pre = mysqli_prepare($conexion, $sql);
                        if ($pre) {
                            //Paso 5: Ejecutar la consulta
                            mysqli_stmt_execute($pre);

                            //Paso 6: Vincular el resultado
                            mysqli_stmt_bind_result($pre, $idr, $roomName, $arrival, $departure);

                            //Paso 7: Iterar con los valores
                            while (mysqli_stmt_fetch($pre)) {
                        ?>
                                <tr>
                                    <td><?= $roomName; ?></td>
                                    <td><?= $arrival; ?></td>
                                    <td><?= $departure; ?></td>
                                    <td>
                                        <button onclick="borrameR(this.id);" type="button" id="btnDelete<?= $idr; ?>" name="btnDelete" class="btn btn-danger">Delete</button>
                                    </td>
                                    <td>
                                        <form action="updateReservations.php" method="POST">
                                            <input type="hidden" id="txtIdr" name="txtIdr" value="<?= $idr; ?>" />
                                            <input type="hidden" id="txtRoom" name="txtRoom" value="<?= $roomName; ?>" />
                                            <input type="hidden" id="txtUser" name="txtUser" value="<?= $user; ?>" />
                                            <input type="hidden" id="txtArrival" name="txtArrival" value="<?= $arrival; ?>" />
                                            <input type="hidden" id="txtDeparture" name="txtDeparture" value="<?= $departure; ?>" />
                                            <button type="submit" id="btnUpdate<?= $id; ?>" name="btnUpdate" class="btn btn-warning">Update</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>

            </section>
        </main>
    </div>

    <?php
    //Paso 8: Liberar
    mysqli_stmt_close($pre);

    //Paso 9: Cerrar la conexión
    mysqli_close($conexion);
    ?>
    <?php
    loadFooter();
    ?>
    <script>
        function borrame(_id) {
            var _id = _id.substring(9);
            console.log(_id);
            alertify.confirm("Borrar registro", "¿Quieres borrar el registro?",
                function() {
                    $.ajax({
                        url: 'deleteUser.php',
                        method: 'POST',
                        //dataType: "html",
                        data: {
                            id: _id
                        },
                        success: function(html) {
                            if (html == 1) {
                                window.location.reload();
                                //alertify.success('Registro borrado');
                            } else {
                                alertify
                                    .alert("Ha ocurrido un error", "Algo ha salido mal, repite el proceso.", function() {}).set('label', 'Vale :(');
                            }
                        },
                        error: function(error) {
                            console.log("error!");
                        }
                    });
                },
                function() {
                    alertify.error('Borrado cancelado');
                }).set('labels', {
                ok: 'Sí, bórralo.',
                cancel: '¡NO!'
            });
        };

        function borrameR(_id) {
            var _id = _id.substring(9);
            console.log(_id);
            alertify.confirm("Borrar registro", "¿Quieres borrar el registro?",
                function() {
                    $.ajax({
                        url: 'deleteReservations.php',
                        method: 'POST',
                        //dataType: "html",
                        data: {
                            id: _id
                        },
                        success: function(html) {
                            if (html == 1) {
                                window.location.reload();
                                //alertify.success('Registro borrado');
                            } else {
                                alertify
                                    .alert("Ha ocurrido un error", "Algo ha salido mal, repite el proceso.", function() {}).set('label', 'Vale :(');
                            }
                        },
                        error: function(error) {
                            console.log("error!");
                        }
                    });
                },
                function() {
                    alertify.error('Borrado cancelado');
                }).set('labels', {
                ok: 'Sí, bórralo.',
                cancel: '¡NO!'
            });
        };
    </script>
</body>

</html>

</html>