<?php
include_once '../phpfiles/functions.php';
#Aquí viene el get de la página productos.php 
if (isset($_POST['btnUpdate'])) {
    $ident = $_POST['txtIdr'];
    $rRoom = $_POST['txtRoom'];
    $rArrival = $_POST['txtArrival'];
    $rDeparture = $_POST['txtDeparture'];
    $returRoom = giveReservedRoomId($ident);
    $returnUser = giveReservedUSerId($ident);
}
?>

<?php
$mIdent = '';
$mRoom = '';
$mArrival = '';
$mDeparture = '';
function cleanChain($chain)
{
    $chain = trim($chain);
    $chain = stripslashes($chain);
    $chain = strip_tags($chain, "");
    return $chain;
}

function formVal()
{
    global $mIdent, $mRoom, $mArrival, $mDeparture;
    $valida = true;
    $error = '';

    if (empty($_POST['txtIdent'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Id empty, please fill it</div>';
    } else {
        $mIdent = cleanChain($_POST['txtIdent']);
    }

    $mRoom = $_POST['txtUroom'];

    if (empty($_POST['txtrArrival'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Arrival empty, please fill it</div>';
    } else {
        $mArrival = cleanChain($_POST['txtrArrival']);
    }

    if (empty($_POST['txtrDeparture'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Departure empty, please fill it</div>';
    } else {
        $mDeparture = cleanChain($_POST['txtrDeparture']);
    }

    return $valida;
}
#Este es para editar el producto en la base de datos
if (isset($_POST['btnSend'])) {
    if (formVal()) {
        /*         $ident = $_POST['txtIdent'];
        $rRoom = $_POST['txtUroom'];
        $rUser = $_POST['txtrUser'];
        $rArrival = $_POST['txtrArrival'];
        $rDeparture = $_POST['txtrDeparture']; */

        # The database variables
        include_once '../phpfiles/conexion.php';
        # Connection to the data base
        $conn = mysqli_connect($host, $user, $password, $db);
        # Preparing the sentence with ?
        $sql = "UPDATE reservations SET roomId= ?, arrival = ?, departure = ? WHERE id = ?";
        # Aux var neede to proper form load in the submit process
        $rRoom = $mRoom;
        $rArrival = $mArrival;
        $rDeparture = $mDeparture;
        $rIdent = $mIdent;
        # Preparing the query
        $pre = mysqli_prepare($conn, $sql);
        # the data to update and the type
        mysqli_stmt_bind_param($pre, "issi", $rRoom, $rArrival, $rDeparture, $rIdent);
        # Ejecuto la consulta
        mysqli_stmt_execute($pre);
        # Cierro la consulta y la conexión
        mysqli_stmt_close($pre);
        mysqli_close($conn);
        $returRoom = giveReservedRoomId($rIdent);
        $returnUser = giveReservedUSerId($rIdent);
?>
        <div class="row mb-3 mt-3">
            <div class="col">
                <div class="alert alert-warning text-center" role="alert">
                    Reservation correctly modified.
                </div>
            </div>
        </div>

<?php
        header('Refresh:1; admin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8" />
    <title>Hilbert Hotel - Edit reservation</title>
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
    <div class="container centrate">
        <h1 class="text-center">Update reservation</h1>
        <div class="row justify-content-center align-items-center">
            <div class="col">

                <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">

                    <input type="hidden" id="txtIdent" name="txtIdent" value="<?= $ident; ?>" />

                    <div class="form-group">
                        <label for="txtUroom">Select a room</label>
                        <select id="txtUroom" name="txtUroom" class="custom-select">
                            <!-- cargo los options con llamada ajax -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtrArrival">Arrival:
                            <input pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" type="date" class="form-control" id="txtrArrival" name="txtrArrival" value="<?= $rArrival ?>" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtrDeparture">Departure:
                            <input pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" type="date" class="form-control" id="txtrDeparture" name="txtrDeparture" value="<?= $rDeparture ?>" required />
                        </label>
                    </div>

                    <button type="submit" id="btnSend" name="btnSend" class="btn btn-primary mb-3">Modify reservation</button>

                    <a href="clientL.php" id="btnAdmin" name="btnAdmin" class="btn btn-primary mb-3">Back to user panel</a>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            console.log("ready!");

            // loads the rooms select
            var opcion = "";
            $.ajax({ // loads the type
                url: 'rooms.php',
                method: 'GET',
                dataType: "json",
                data: {},
                success: function(data) {
                    $.each(data, function(i, v) {
                        if (v.id == <?php echo json_encode($returRoom); ?>) {
                            opcion += '<option value="' + v.id + '" selected>' + v.name + '</option>';
                        } else {
                            opcion += '<option value="' + v.id + '">' + v.name + '</option>';
                        }
                    });
                    $("#txtUroom").html(opcion);
                    console.log(opcion);
                },
                error: function(error) {
                    console.log("error!");
                }
            });

            // with this changes the selected option when the page is loaded and the user changes it for submmiting the form
            $("#txtUroom").change(function() {
                $("#txtUroom option:selected").attr("selected", true).siblings().removeAttr("selected");
            });

        });
    </script>
</body>

</html>