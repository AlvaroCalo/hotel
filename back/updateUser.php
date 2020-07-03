<?php
include_once '../phpfiles/functions.php';
#Aquí viene el get de la página productos.php 
if (isset($_POST['btnEdit'])) {
    $ident = $_POST['txtId'];
    $uPass = $_POST['txtPass'];
    $uEmail = $_POST['txtEmail'];
    $uTel = $_POST['txtTel'];
    $uStreet = $_POST['txtStreet'];
    $uPostal = $_POST['txtPostalCode'];
    $uCity = $_POST['txtCity'];
    $uCountry = $_POST['txtCountry'];
    $arch = $_POST['txtRol'];
}
?>

<?php
$nombre = '';
$tipo = '';
$descripcion = '';
$archivo = '';
$precio = '';
$rati = '';
$error = '';
function limpiarCadenas($cadena)  //no funciona, no me las limpia 
{
    $cadena = trim($cadena); //quita los espacios del principio y del final
    $cadena = stripslashes($cadena); //quita contrabarras
    $cadena = strip_tags($cadena, ""); //quita todas las etiquetas
    return $cadena;
}

function validaFormulario()
{
    global $error, $nombre, $tipo, $descripcion, $archivo, $precio, $rati;
    $valida = true;
    $error = '';

    if (empty($_POST['txtNombre'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">El nombre no puede estar vacío</div>';
    } else {
        $prenombre = limpiarCadenas($_POST['txtNombre']);
        $nombre = $prenombre;
    }

    if (empty($_POST['txtDescripcion'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">La descripción no puede estar vacía</div>';
    } else {
        $descripcion = limpiarCadenas($_POST['txtDescripcion']);
    }

    $tipo = $_POST['txtTipos'];

    if (empty($_POST['txtPrecio'])) {
        $valida = false;
        $error .= '<div class="alert alert-warning text-center" role="alert">El precio no puede estar vacío</div>';
    } else {
        $precio = limpiarCadenas($_POST['txtPrecio']);
    }

    $rati = $_POST['rangeRating'];

    return $valida;
}
#Este es para editar el producto en la base de datos
if (isset($_POST['btnEnviar'])) {
    if (validaFormulario()) {
        $ident = $_POST['txtIdent'];
        $title = $_POST['txtNombre'];
        $type = $_POST['txtTipos'];
        $descrip = $_POST['txtDescripcion'];
        $arch = $_POST['txtArchivo'];
        $price = $_POST['txtPrecio'];
        $rating = $_POST['rangeRating'];
        $typeNum = traduceTipos($type);

        # The database variables
        include_once '../conexion.php';
        # Connection to the data base
        $conn = mysqli_connect($host, $usuario, $password, $db);
        # Preparing the sentence with ?
        $sql = "UPDATE productos SET nombrep = ?, tipop = ?, descrip = ?, archivop = ?, preciop = ?, ratingp = ? WHERE id = ?";
        # The data to update
        $titleU = $title;
        $typeU = $typeNum;
        $descripU = $descrip;
        $filU = $arch;
        $priceU = $price;
        $ratingU = $rating;
        $ide = $ident;
        # Preparing the query
        $pre = mysqli_prepare($conn, $sql);
        # the data to update and the type
        mysqli_stmt_bind_param($pre, "sissdii", $titleU, $typeU, $descripU, $filU, $priceU, $ratingU, $ide);
        # Ejecuto la consulta
        mysqli_stmt_execute($pre);
        # Cierro la consulta y la conexión
        mysqli_stmt_close($pre);
        mysqli_close($conn);
?>
        <div class="row mb-3 mt-3">
            <div class="col">
                <div class="alert alert-warning text-center" role="alert">
                    User correctly modified.
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
    <title>Hilbert Hotel - Edit user</title>
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
        <h1 class="text-center">Editar producto</h1>
        <div class="row justify-content-center align-items-center">
            <div class="col">

                <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="txtIdent" name="txtIdent" value="<?= $ident; ?>" />

                    <div class="form-group">
                        <label for="txtUemail">User email:
                            <input type="text" class="form-control" id="txtUemail" name="txtUemail" value="<?= $uEmail ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUpass">User password:
                            <input type="text" class="form-control" id="txtUpass" name="txtUpass" value="<?= $uPass ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUtel">User phone:
                            <input type="text" class="form-control" id="txtUtel" name="txtUtel" value="<?= $uTel ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUstreet">User street:
                            <input type="text" class="form-control" id="txtUstreet" name="txtUstreet" value="<?= $uStreet ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUpostal">User postal code:
                            <input type="text" class="form-control" id="txtUpostal" name="txtUpostal" value="<?= $uPostal ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUcity">User city:
                            <input type="text" class="form-control" id="txtUcity" name="txtUcity" value="<?= $uCity ?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="txtUcountry">User country:
                            <input type="text" class="form-control" id="txtUcountry" name="txtUcountry" value="<?= $uCountry ?>">
                        </label>
                    </div>

<!--                     <div class="form-group">
                        <label for="txtTipos">Select rol</label>
                        <select id="txtTipos" name="txtTipos" class="custom-select">
                             cargo los options con llamada ajax
                        </select>
                    </div> -->

                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary mb-3" onclick="validarFormulario()">Modificar producto</button>

                    <a href="productos.php" id="btnVProductos" name="btnVProductos" class="btn btn-primary mb-3">Volver a productos</a>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            console.log("ready!");
            // with this changes the selected option when the page is loaded and the user changes it for submmiting the form
/*             $("#txtTipos").change(function() {
                $("#txtTipos option:selected").attr("selected", true).siblings().removeAttr("selected");
            }); */
        });

/*         var opcion = "";
        $.ajax({ // loads the type
            url: '../tipos.php',
            method: 'GET',
            dataType: "json",
            data: {},
            success: function(data) {
                $.each(data, function(i, v) {
                    if (v.nombre == <?php echo json_encode($type); ?>) {
                        opcion += '<option value="' + v.nombre + '" selected>' + v.nombre.charAt(0).toUpperCase() + v.nombre.slice(1) + '</option>';
                    } else {
                        opcion += '<option value="' + v.nombre + '">' + v.nombre.charAt(0).toUpperCase() + v.nombre.slice(1) + '</option>';
                    }
                });
                $("#txtTipos").html(opcion);
            },
            error: function(error) {
                console.log("error!");
            }
        }); */

        function validarFormulario() { // he probado la función y va bien, acordarse de CAMBIARRRRRRR el onclick cuando vaya a produccion!!!

            var resultado = true;
            if ($("#txtNombre").val() == "") {
                resultado = false;
            }

            if ($("#txtTipos").val() == "0") {
                resultado = false;
            }

            if ($("#txtDescripcion").val() == "") {
                resultado = false;
            }
            if ($("#txtPrecio").val() == "") {
                resultado = false;
            };

            if (resultado) {
                return true;
            } else {
                event.preventDefault();
                return false;
            };
        }
    </script>
</body>

</html>