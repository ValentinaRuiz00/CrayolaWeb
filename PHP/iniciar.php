<?php
session_start();
extract($_REQUEST);

require "conexionBasesDatos2.php"; 

$pass=($_REQUEST['passUsuario']);
$login=($_REQUEST['nomUsuario']);

$_SESSION['usuario'] = $_REQUEST['nomUsuario'];


$objConexion=Conectarse();

$sql = "select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";

$resultado = $objConexion->query($sql);

$existe = $resultado->num_rows;

if($existe==1)
{
    $usuario=$resultado->fetch_object();
    $_SESSION['user']=$usuario->usuLogin;
    header("location:../HTML/index2.php");
}
else
{
    header("location:erroralingresar.html");
}

$_SESSION['']


?>