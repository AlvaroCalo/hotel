<?php

session_start();


if(isset($_SESSION['loggedin'])){
	if ($_SESSION['rol'] == 'admin') {
        header("location: ../back/admin.php");
    } else {
        header("location: ../back/clientL.php");
    }
}

?>