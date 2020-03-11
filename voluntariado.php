<?php

$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );

/*       YA SIRVE        
se guarda en   TABLA    voluntario_cod      */


$name1 = $_POST['nombre'];
$apellidos1 = $_POST['apellidos'];
$edad1 = $_POST['edad'];
$domicilio1 = $_POST['domicilio'];
$telefono1 = $_POST['telefono'];
$ciudad1 = $_POST['ciudad'];
$tipo1 = $_POST['tipo'];



$consultaa = "CALL CODIGO_VOLUNTARIO ( '$name1', '$apellidos1', '$edad1', '$domicilio1', '$telefono1', '$ciudad1', 
'$tipo1' )";
$ejecutar = mysqli_query ($conexion, $consultaa);


if ( !$ejecutar ) {
    echo "Error al insertar";
}else{
    echo "Datos guardados<br><a href='voluntariado.html'>Volver</a>";
}

?>