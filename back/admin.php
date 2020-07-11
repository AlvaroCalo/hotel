<?php

session_start();

if(!isset($_SESSION['loggedin'])){
	header('Location: ../front/reservation.php');
} elseif ($_SESSION['rol'] == 'client') {
    header('Location: ../back/clientL.php');
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

    <div class="container">
        <div class="row m">
            <div class="col m-3">
            <a href="#clientList">Go to client list</a>
            </div>
            <div class="col m-3">
            <a href="#reservationList">Go to reservation list</a>
            </div>
        </div>
        <a class="btn btn-danger m-5" href="logout.php">Log out</a>
        <main class="container-fluid">
            <section class="row">
                <div class="col">
                    <h3 id="clientList" class="text-center">Clients list<span><a class="btn" href="addUser.php" >Add client</a></span></h3>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>

                        <?php
                        $sql = "SELECT id, PASSWORD, email, tel, streetName, postalCode, city, country, rol FROM users";
                        //4.1 preparar la sentencia
                        $pre = mysqli_prepare($conexion, $sql);
                        if ($pre) {
                            //Paso 5: Ejecutar la consulta
                            mysqli_stmt_execute($pre);

                            //Paso 6: Vincular el resultado
                            mysqli_stmt_bind_result($pre, $id, $password, $email, $tel, $streetName, $postalCode, $city, $country, $rol);

                            //Paso 7: Iterar con los valores
                            while (mysqli_stmt_fetch($pre)) {
                        ?>
                                <tr>
                                    <td><?= $id; ?></td>
                                    <td><?= $email; ?></td>
                                    <td><?= $tel; ?></td>
                                    <td><?= $country; ?></td>
                                    <td>
                                        <form action="viewUser.php" method="POST">
                                            <input type="hidden" id="txtId" name="txtId" value="<?= $id; ?>" />
                                            <button type="submit" id="btnView<?= $id; ?>" name="btnView" class="btn btn-info">View</button>
                                        </form>
                                    </td>
                                    <td>
                                        <button onclick="borrame(this.id);" type="button" id="btnBorrar<?= $id; ?>" name="btnBorrar" class="btn btn-danger">Delete</button>
                                    </td>
                                    <td>
                                        <form action="updateUSER.php" method="POST">
                                            <input type="hidden" id="txtId" name="txtId" value="<?= $id; ?>" />
                                            <input type="hidden" id="txtPass" name="txtPass" value="<?= $password; ?>" />
                                            <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $email; ?>" />
                                            <input type="hidden" id="txtTel" name="txtTel" value="<?= $tel; ?>" />
                                            <input type="hidden" id="txtStreet" name="txtStreet" value="<?= $streetName; ?>" />
                                            <input type="hidden" id="txtPostalCode" name="txtPostalCode" value="<?= $postalCode; ?>" />
                                            <input type="hidden" id="txtCity" name="txtCity" value="<?= $city; ?>" />
                                            <input type="hidden" id="txtCountry" name="txtCountry" value="<?= $country; ?>" />
                                            <input type="hidden" id="txtRol" name="txtRol" value="<?= $rol; ?>" />
                                            <button type="submit" id="btnEditar<?= $id; ?>" name="btnEdit" class="btn btn-warning">Update</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <div class="col">
                    <h3 id="reservationList" class="text-center">Reservations list <span><a class="btn" href="addReservations.php">Add reservation</a></span> </h3>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Room</th>
                            <th>Client</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        <?php
                        $sql = "SELECT reservations.id, rooms.roomName, users.email, reservations.arrival, reservations.departure
                                FROM reservations
                                JOIN users ON users.id = reservations.userId
                                JOIN rooms ON rooms.id = reservations.roomId
                                ORDER BY reservations.id";
                        //4.1 preparar la sentencia
                        $pre = mysqli_prepare($conexion, $sql);
                        if ($pre) {
                            //Paso 5: Ejecutar la consulta
                            mysqli_stmt_execute($pre);

                            //Paso 6: Vincular el resultado
                            mysqli_stmt_bind_result($pre, $idr, $roomName, $user, $arrival, $departure);

                            //Paso 7: Iterar con los valores
                            while (mysqli_stmt_fetch($pre)) {
                        ?>
                                <tr>
                                    <td><?= $idr; ?></td>
                                    <td><?= $roomName; ?></td>
                                    <td><?= $user; ?></td>
                                    <td><?= $arrival; ?></td>
                                    <td><?= $departure; ?></td>
                                    <td>
                                        <form action="viewReservations.php" method="POST">
                                            <input type="hidden" id="txtId" name="txtId" value="<?= $idr; ?>" />
                                            <button type="submit" id="btnViewR<?= $idr; ?>" name="btnViewR" class="btn btn-info">View</button>
                                        </form>
                                    </td>
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

    <script>
        function borrame(_id) {
            var _id = _id.substring(9);
            console.log(_id);
            alertify.confirm("Delete record", "Do you want to delete the record?",
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
                                    .alert("There is an error", "Check that the user has not any reservation and try again.", function() {}).set('label', 'Vale :(');
                            }
                        },
                        error: function(error) {
                            console.log("error!");
                        }
                    });
                },
                function() {
                    alertify.error('Delete record canceled');
                }).set('labels', {
                ok: 'Yes, delete',
                cancel: '¡NO!'
            });
        };

        function borrameR(_id) {
            var _id = _id.substring(9);
            console.log(_id);
            alertify.confirm("Delete record", "Do you want to delete the record?",
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
                                    .alert("There is an error", "Something went wrong", function() {}).set('label', 'OK :(');
                            }
                        },
                        error: function(error) {
                            console.log("error!");
                        }
                    });
                },
                function() {
                    alertify.error('Delete record canceled');
                }).set('labels', {
                ok: 'Yes, delete',
                cancel: '¡NO!'
            });
        };
    </script>
</body>

</html>

</html>