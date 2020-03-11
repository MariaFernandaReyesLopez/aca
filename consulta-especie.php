<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );

//Consulta para ver los benefactores (especie)

$consulta4 = 'SELECT * FROM BENEFACTORES_COD;';
$resultado4 = mysqli_query( $conexion, $consulta4 ) or die ( "Algo ha ido mal en la consulta verificala");


//tabla para mostar lo datos de benefactores
echo "</table>";
echo "<table borde='3'>";

echo "<th>CODIGO</th>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO_PATERNO</th>";
echo "<th>APELLIDO_MATERNO</th>";
echo "<th>EMAIL</th>";
echo "<th>TELEFONO</th>";
while ($columna4 = mysqli_fetch_array( $resultado4 )){
echo "<tr>";
echo "<td>" . $columna4['CODIGO'] . "</td>";
echo "<td>" . $columna4['NOMBRE'] . "</td>";
echo "<td>" . $columna4['APELLIDO_PATERNO'] . "</td>";
echo "<td>" . $columna4['APELLIDO_MATERNO'] . "</td>";
echo "<td>" . $columna4['EMAIL'] . "</td>";
echo "<td>" . $columna4['TELEFONO'] . "</td>";
echo "</tr>";
}


?>