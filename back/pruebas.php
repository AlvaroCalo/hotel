<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'hotel';
?>

<?php
function checkUser($userCheck)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $connT = mysqli_connect($host, $user, $password, $db);
    #Tengo que hacer una select para sacar los id de los tipos
    $devuelve = '';
    //Paso 3: Comprobar si conecta
    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die()
    }
    $sqlT = "SELECT email FROM users WHERE email = ?";
    $preT = mysqli_prepare($connT, $sqlT);
    mysqli_stmt_bind_param($preT, "s", $userCheck);
    mysqli_stmt_execute($preT);
    mysqli_stmt_bind_result($preT, $userMail);

    if (mysqli_stmt_fetch($preT) == 1) {
        return true;
    } else {
        return false;
    }
    //Paso 8: Liberar
    mysqli_stmt_close(($preT));

    //Paso 9: Cerrar la conexión
    mysqli_close($connT);

    return $devuelve;

}

$userName = 'rogelia@europa.eu';

if ( checkUser($userName) ) {
    header("location: ../front/reservation.php");
} else {
    header("location: ../front/index.php");
}


?>