<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'hotel';

function giveReservedRoomId($id)
{
    global $host, $user, $password, $db;
    # Conectarse a la base de datos
    $connT = mysqli_connect($host, $user, $password, $db);
    #Tengo que hacer una select para sacar los id de los tipos
    //Paso 3: Comprobar si conecta
    if (mysqli_connect_errno()) {
        echo 'Error al conectar con la base de datos';
        exit(); //die()
    }
    $sqlT = "SELECT roomId FROM reservations WHERE id = ?";
    $preT = mysqli_prepare($connT, $sqlT);
    mysqli_stmt_bind_param($preT, "i", $id);
    mysqli_stmt_execute($preT);
    mysqli_stmt_bind_result($preT, $roomId);
    $tipos = [];
    while (mysqli_stmt_fetch($preT)) {
        $tipos[] = array(
            'id' => $roomId
        );
    }
    echo json_encode($tipos); 

    //Paso 8: Liberar
    mysqli_stmt_close(($preT));

    //Paso 9: Cerrar la conexión
    mysqli_close($connT);

}
?>

<?php
echo $tipos;
/* $ident = 3;
$returRoom = 1;
echo $returRoom;
$returRoom = giveReservedRoomId($ident);
echo $returRoom; */

?>