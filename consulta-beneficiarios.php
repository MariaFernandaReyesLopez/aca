<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost:3307";
$basededatos = "aca";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues siempre no quizo conectar a la base de datos" );

//Consulta para ver los beneficiarios 

$consulta1 = 'SELECT * FROM BENEFICIARIOS_COD;';
$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta verificala");



//tabla para mostrar los datos de beneficiarios

echo "<table borde='3'>";

echo "<th>ID</th>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO_PATERNO</th>";
echo "<th>APELLIDO_MATERNO</th>";
echo "<th>EDAD</th>";
echo "<th>DOMICILIO</th>";
echo "<th>TELEFONO</th>";
echo "<th>ACTIVO</th>";
echo "<th>NUM_BANCO</th>";
echo "</tr>";
while ($columna1 = mysqli_fetch_array( $resultado1 )){
echo "<tr>";
echo "<td>" . $columna1['ID'] . "</td>";
echo "<td>" . $columna1['NOMBRE'] . "</td>";
echo "<td>" . $columna1['APELLIDO_PATERNO'] . "</td>";
echo "<td>" . $columna1['APELLIDO_MATERNO'] . "</td>";
echo "<td>" . $columna1['EDAD'] . "</td>";
echo "<td>" . $columna1['DOMICILIO'] . "</td>";
echo "<td>" . $columna1['TELEFONO'] . "</td>";
echo "<td>" . $columna1['ACTIVO'] . "</td>";
echo "<td>" . $columna1['NUM_BANCO'] . "</td>";
echo "</tr>";
}


?>