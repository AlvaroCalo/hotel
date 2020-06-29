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
    <link rel="stylesheet" href="../css/back.css" />
    <!-- JQuery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    ?>

    <main class="container-fluid">
        <section class="row">
            <div class="col">
                <h3 class="text-center">Clients list</h3>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>View</th>
                        <th>Del</th>
                        <th>Update</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>monchito@europa.eu</td>
                        <td>618996633</td>
                        <td>España</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>rockefeller@europa.eu</td>
                        <td>618997745</td>
                        <td>España</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>macario@europa.eu</td>
                        <td>632598873</td>
                        <td>España</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <h3 class="text-center">Reservations list</h3>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Room</th>
                        <th>Client</th>
                        <th>Arrival</th>
                        <th>Departure</th>
                        <th>View</th>
                        <th>Delte</th>
                        <th>Update</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sexy</td>
                        <td>Macario</td>
                        <td>2020-06-29</td>
                        <td>2020-07-29</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sexy</td>
                        <td>Macario</td>
                        <td>2020-06-29</td>
                        <td>2020-07-29</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sexy</td>
                        <td>Macario</td>
                        <td>2020-06-29</td>
                        <td>2020-07-29</td>
                        <td>View</td>
                        <td>Borrar</td>
                        <td>Editar</td>
                    </tr>
                </table>
            </div>

        </section>
    </main>

    <?php
    loadFooter();
    ?>

</body>

</html>

</html>