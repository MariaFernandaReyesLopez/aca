<?php

$conex = mysqli_connect("localhost:3307", "root", "")
        or die ("No se pudo conectar");

mysqli_select_db( $conex, "aca" )
        or die ("No se ha conectado con la BD");

?>
