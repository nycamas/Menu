<?php
// establecer y realizar consulta. guardamos en variable.
include 'conexionbd.php';	
$consulta = "SELECT * FROM tecnico";
	
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "No se ha podido ejecutar la consulta, consulte con el departamento de desarrollo");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Apellidos</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Nombre'] . "</td><td>" . $columna['Apellidos'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>