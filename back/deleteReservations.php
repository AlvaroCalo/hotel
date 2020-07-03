<?php
include_once '../phpfiles/conexion.php';
# Conectarse a la base de datos
$conn = mysqli_connect($host, $user, $password, $db);

if (isset($_POST) and !empty($_POST['id'])) {
    $id = $_POST["id"];

    // Deleting the row
    # Preparo la sentencia con los comodines ?
    $sql = "DELETE FROM reservations WHERE id = ?";
    # Preparo los datos que voy a insertar
    # Preparo la consulta
    $pre = mysqli_prepare($conn, $sql);
    # indico los datos a reemplazar con su tipo
    mysqli_stmt_bind_param($pre, "i", $id);
    # Ejecuto la consulta
    mysqli_stmt_execute($pre);
    if (mysqli_stmt_affected_rows($pre) > 0) {
        echo 1;
    } else {
        echo 0;
    }
    mysqli_stmt_close($pre);
}
mysqli_close($conn);

?>
<?php
?>