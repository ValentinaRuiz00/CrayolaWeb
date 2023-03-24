<?php
extract($_REQUEST);

require "conexionBasesDatos.php"; 

$objConexion= new mysqli($host,$user,$password,$baseDatos);
//verificamos la conexion
if($objConexion->connect_errno){

    echo"Error de conexion a la Base de Datos",$objConexion->connect_error;
    exit();
}

$sql="update productos set nomProducto='$_REQUEST[nombre]' where codProducto='$_REQUEST[codigo]'";
$objConexion->query($sql);
$sql="update productos set catProducto='$_REQUEST[categoria]' where codProducto='$_REQUEST[codigo]'";
$objConexion->query($sql);
$sql="update productos set cantProducto='$_REQUEST[cantidad]' where codProducto='$_REQUEST[codigo]'";
$objConexion->query($sql);
$sql="update productos set valProducto='$_REQUEST[valor]' where codProducto='$_REQUEST[codigo]'";

if($objConexion->query($sql))
header("location:productos.php");
else
header("location:erroralañadir.html");
    
?>