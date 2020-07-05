<?php

$registros = array('user'=>'hola', 'rol'=>'adios' );


if ( $registros['rol'] == 'adios' ) {
    echo "hola ";
    echo $registros['user'];
} else {
    echo "adios ";
}
?>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>