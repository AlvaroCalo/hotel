<?php
# Preparar las variables con los datos de conexión
include_once '../phpfiles/conexion.php';

global $host, $user, $password, $db;
# Conectarse a la base de datos
$connT = mysqli_connect($host, $user, $password, $db);
#Tengo que hacer una select para sacar los id de los tipos
//Paso 3: Comprobar si conecta
if (mysqli_connect_errno()) {
    echo 'Error al conectar con la base de datos';
    exit(); //die()
}
$sqlT = "SELECT id, email FROM users";
$preT = mysqli_prepare($connT, $sqlT);
mysqli_stmt_execute($preT);
mysqli_stmt_bind_result($preT, $id, $nameR);
$tipos = [];
while (mysqli_stmt_fetch($preT)) {
    $tipos[] = array(
        'id' => $id,
        'name' => $nameR,
    );
}
echo json_encode($tipos);

//Paso 8: Liberar
mysqli_stmt_close(($preT));

//Paso 9: Cerrar la conexión
mysqli_close($connT);
?>

<?php
?>