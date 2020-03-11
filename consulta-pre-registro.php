<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );


//Consulta para ver los pre_registros
$consulta2 = 'SELECT * FROM PRE_REGISTRO1;';
$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta verificala");


//tabla para mostar los datos de pre_registros
echo "</table>";
echo "<table borde='3'>";

echo "<th>CLAVE</th>";
echo "<th>NOMBRE_COMPLETO</th>";
echo "<th>SEXO</th>";
echo "<th>ESTADO_CIVIL</th>";
echo "<th>NUM_INTEGRANTES</th>";
echo "<th>OCUPACION</th>";
echo "<th>SUELDO</th>";
echo "</tr>";
while ($columna2 = mysqli_fetch_array( $resultado2 )){
echo "<tr>";
echo "<td>" . $columna2['CLAVE'] . "</td>";
echo "<td>" . $columna2['NOMBRE_COMPLETO'] . "</td>";
echo "<td>" . $columna2['SEXO'] . "</td>";
echo "<td>" . $columna2['ESTADO_CIVIL'] . "</td>";
echo "<td>" . $columna2['NUM_INTEGRANTES'] . "</td>";
echo "<td>" . $columna2['OCUPACION'] . "</td>";
echo "<td>" . $columna2['SUELDO'] . "</td>";
echo "</tr>";
}

?>