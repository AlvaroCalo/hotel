<?php
include_once '../phpfiles/functions.php';
?>

<?php
$mPass = '';
$mEmail = '';
$mTel = '';
$mStreet = '';
$mPostal = '';
$mCity = '';
$mCountry = '';
$mRol = '';
$error = '';
function cleanChain($chain)
{
    $chain = trim($chain);
    $chain = stripslashes($chain);
    $chain = strip_tags($chain, "");
    return $chain;
}

function formVal()
{
    global $mIdent, $mPass, $mEmail, $mTel, $mStreet, $mPostal, $mCity, $mCountry, $mRol, $error;
    $valida = true;
    $error = '';

    if (empty($_POST['txtUemail'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Email empty, please fill it</div>';
    } else {
        $mEmail = cleanChain($_POST['txtUemail']);
    }

    if (empty($_POST['txtUpass'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Password empty, please fill it</div>';
    } else {
        $mPass = cleanChain($_POST['txtUpass']);
    }

    if (empty($_POST['txtUtel'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Phone empty, please fill it</div>';
    } else {
        $mTel = cleanChain($_POST['txtUtel']);
    }

    if (empty($_POST['txtUstreet'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Street empty, please fill it</div>';
    } else {
        $mStreet = cleanChain($_POST['txtUstreet']);
    }

    if (empty($_POST['txtUpostal'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Postal code empty, please fill it</div>';
    } else {
        $mPostal = cleanChain($_POST['txtUpostal']);
    }

    if (empty($_POST['txtUcity'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">City empty, please fill it</div>';
    } else {
        $mCity = cleanChain($_POST['txtUcity']);
    }

    if (empty($_POST['txtUcountry'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">Country empty, please fill it</div>';
    } else {
        $mCountry = cleanChain($_POST['txtUcountry']);
    }

    $mRol = $_POST['txtURol'];

    return $valida;
}
#Este es para editar el producto en la base de datos
if (isset($_POST['btnSend'])) {
    if (formVal()) {
        $uPass = $_POST['txtUpass'];
        $uEmail = $_POST['txtUemail'];
        $uTel = $_POST['txtUtel'];
        $uStreet = $_POST['txtUstreet'];
        $uPostal = $_POST['txtUpostal'];
        $uCity = $_POST['txtUcity'];
        $uCountry = $_POST['txtUcountry'];
        $uRol = $_POST['txtURol']; 

        # The database variables
        include_once '../phpfiles/conexion.php';
        # Connection to the data base
        $conn = mysqli_connect($host, $user, $password, $db);
        # Preparing the sentence with ?
        $sql = "INSERT INTO users (PASSWORD, email, tel, streetName, postalCode, city, country, rol)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        # Aux var neede to proper form load in the submit process
        $uPass = $mPass;
        $uEmail = $mEmail;
        $uTel = $mTel;
        $uStreet = $mStreet;
        $uPostal = $mPostal;
        $uCity = $mCity;
        $uCountry = $mCountry;
        $uRol = $mRol;
        $uIdent = $mIdent;
        # Preparing the query
        $pre = mysqli_prepare($conn, $sql);
        # the data to update and the type
        mysqli_stmt_bind_param($pre, "ssssisss", $uPass, $uEmail, $uTel, $uStreet, $uPostal, $uCity, $uCountry, $uRol);
        # Ejecuto la consulta
        mysqli_stmt_execute($pre);
        # Cierro la consulta y la conexión
        mysqli_stmt_close($pre);
        mysqli_close($conn);
?>
        <div class="row mb-3 mt-3">
            <div class="col">
                <div class="alert alert-warning text-center" role="alert">
                    User correctly added.
                </div>
            </div>
        </div>

<?php
        header('Refresh:2; admin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8" />
    <title>Hilbert Hotel - Add user</title>
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
        <h1 class="text-center">Add user</h1>
        <div class="row justify-content-center align-items-center">
            <div class="col">

                <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="txtUemail">User email:
                            <input type="text" class="form-control" id="txtUemail" name="txtUemail" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUpass">User password:
                            <input type="text" class="form-control" id="txtUpass" name="txtUpass" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUtel">User phone:
                            <input type="text" class="form-control" id="txtUtel" name="txtUtel" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUstreet">User street:
                            <input type="text" class="form-control" id="txtUstreet" name="txtUstreet" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUpostal">User postal code:
                            <input type="text" class="form-control" id="txtUpostal" name="txtUpostal" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUcity">User city:
                            <input type="text" class="form-control" id="txtUcity" name="txtUcity" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUcountry">User country:
                            <input type="text" class="form-control" id="txtUcountry" name="txtUcountry" required />
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtURol">Select rol</label>
                        <select id="txtURol" name="txtURol" class="custom-select">
                            <option value="client">Client</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <button type="submit" id="btnSend" name="btnSend" class="btn btn-primary mb-3">Add user</button>

                    <a href="admin.php" id="btnAdmin" name="btnAdmin" class="btn btn-primary mb-3">Back to admin panel</a>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            console.log("ready!");


            // with this changes the selected option when the page is loaded and the user changes it for submmiting the form
            $("#txtURol").change(function() {
                $("#txtURol option:selected").attr("selected", true).siblings().removeAttr("selected");
            });

        });
    </script>
</body>

</html>