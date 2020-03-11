<?php

$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );
 

/*       YA SIRVE        
se guarda en   TABLA    beneficiarios_cod      */

$name = $_POST['nombre'];
$ape1 = $_POST['apellidos1'];
$ape2 = $_POST['apellidos2'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$tel = $_POST['telefono'];
$activo = $_POST['activo'];
$no_banco = $_POST['no-banco'];




$consulta = "CALL BENEFICIARIOS_COD ( '$name', '$ape1', '$ape2', '$edad', '$domicilio', '$tel', '$activo', '$no_banco')";
$ejecutar = mysqli_query ($conexion, $consulta);


if ( !$ejecutar ) {
    echo "Error al insertar";
}else{
    echo "Datos guardados<br><a href='beneficiarios2.html'>Volver</a>";
}

?>