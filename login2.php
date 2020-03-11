<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "usuarios1";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );


$usuario = $_POST['name'];
$clave = $_POST['pass'];


$consulta = "SELECT * FROM usuarios WHERE usuario='.$usuario' AND contrasena='.$clave'";
$resul = mysqli_query ($conexion, $consulta);


if ($resul>0) {
    header("location: agregar.html");
}
else{
    echo "Error en la autenticación<br><a href='login.html'>Intentar otra vez</a>";
}


?>
