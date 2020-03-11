<?php

$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );
 

/*       YA SIRVE        
se guarda en   TABLA    pre_registro1     */


$name = $_POST['nombre'];
$sexo = $_POST['sexo'];
$estado = $_POST['estado'];
$integrantes = $_POST['integrantes'];
$ocupacion = $_POST['ocupacion'];
$sueldo = $_POST['sueldo'];


$consulta = "CALL CLAVE_PRE_REGISTRO ( '$name', '$sexo', '$estado', '$integrantes', '$ocupacion', '$sueldo')";
$ejecutar = mysqli_query ($conexion, $consulta);

if ( !$ejecutar ) {
    echo "Error al insertar";
}else{
    echo "datos guardados<br><a href='pre-registro.html'>Volver</a>";
}

?>