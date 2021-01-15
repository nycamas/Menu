<?php
include '../js/functiones.js';
include 'conexionbd.php';
if (isset($_POST['picada'])){
    $picada=$_POST['picada'];
    date_default_timezone_set('Europe/Madrid');
    $fec=date('d-m-Y g:i', time());
    //echo $fec;
    $consulta = "INSERT INTO `Picada` (`picada`, `fecha`) VALUES ('$picada','$fec')";
    $resultado = mysqli_query( $conexion, $consulta );
     //or die ( "No se ha podido ejecutar la consulta, consulte con el departamento de desarrollo");
    //header("Location: ../menu.php#etq11");
}else{
// echo "<script> alert('entrada NO válida')</script>";
}
mysqli_close( $conexion ); 
echo "<script>history.go(-1)</script>";
?>