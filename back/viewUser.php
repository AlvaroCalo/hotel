<?php
require_once("../phpfiles/functions.php");

# Post of admin.php
if (isset($_POST['btnView'])) {
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
            $sql = "SELECT id, PASSWORD, email, tel, streetName, postalCode, city, country, rol FROM users WHERE id= ?";
            $pre = mysqli_prepare($conexion, $sql);
            if ($pre) {
                //4.2 vincular los parámetros con la sentencia
                mysqli_stmt_bind_param($pre, "i", $ident);

                //Paso 5: Ejecutar la consulta
                mysqli_stmt_execute($pre);

                //Paso 6: Vincular el resultado
                mysqli_stmt_bind_result($pre, $id, $password, $email, $tel, $streetName, $postalCode, $city, $country, $rol);

                //Paso 7: Iterar con los valores
                while (mysqli_stmt_fetch($pre)) {
            ?>

                    <tr>
                        <th>Id</th>
                        <td><?= $id; ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?= $password; ?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?= $email; ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?= $tel; ?></td>
                    </tr>
                    <tr>
                        <th>Street name</th>
                        <td><?= $streetName; ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?= $city; ?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?= $country; ?></td>
                    </tr>
                    <tr>
                        <th>Rol</th>
                        <td><?= $rol; ?></td>
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