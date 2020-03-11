<?php

$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );

/*       YA SIRVE        
se guarda en   TABLA    benefactores_cod     */


$name = $_POST['nombre'];
$ape1 = $_POST['name1'];
$ape2 = $_POST['name2'];
$correo = $_POST['email'];
$tel = $_POST['telefono'];


$consulta = "CALL BENEFACTORES_COD ( '$name', '$ape1', '$ape2', '$correo', '$tel')";
$ejecutar = mysqli_query ( $conexion, $consulta);

if ( !$ejecutar ) {
    echo "Error al insertar";
}else{
    echo "datos guardados<br><a href='especie.html'>Volver</a>";
}

?>