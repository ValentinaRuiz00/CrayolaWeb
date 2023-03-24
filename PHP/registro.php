<?php
extract($_REQUEST);

require "conexionBasesDatos.php"; 

$objConexion= new mysqli($host,$user,$password,$baseDatos);
//verificamos la conexion
if($objConexion->connect_errno){

    echo"Error de conexion a la Base de Datos",$objConexion->connect_error;
    exit();
}

$sql="insert into usuarios(usuLogin, usuPassword)values('$_REQUEST[usuario]','$_REQUEST[pass]')";

if($objConexion->query($sql))
header("location:productos.php");
else
header("location:erroralañadir.html");
    
?>