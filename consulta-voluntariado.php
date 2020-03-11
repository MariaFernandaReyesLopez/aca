<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );

//Consulta para ver los voluntarios


$consulta3 = 'SELECT * FROM VOLUNTARIO_COD;';
$resultado3 = mysqli_query( $conexion, $consulta3 ) or die ( "Algo ha ido mal en la consulta verificala");


//tabla para mostar los datos de voluntarios
echo "</table>";
echo "<table borde='3'>";

echo "<th>ID</th>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO</th>";
echo "<th>EDAD</th>";
echo "<th>DOMICILIO</th>";
echo "<th>TELEFONO</th>";
echo "<th>CIUDAD</th>";
echo "<th>TIPO</th>";
echo "</tr>";
while ($columna3 = mysqli_fetch_array( $resultado3 )){
echo "<tr>";
echo "<td>" . $columna3['ID'] . "</td>";
echo "<td>" . $columna3['NOMBRE'] . "</td>";
echo "<td>" . $columna3['APELLIDO'] . "</td>";
echo "<td>" . $columna3['EDAD'] . "</td>";
echo "<td>" . $columna3['DOMICILIO'] . "</td>";
echo "<td>" . $columna3['TELEFONO'] . "</td>";
echo "<td>" . $columna3['CIUDAD'] . "</td>";
echo "<td>" . $columna3['TIPO'] . "</td>";
echo "</tr>";
}


?>