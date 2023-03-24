<?php
    function Conectarse()
    {
        $objConexion = new mysqli("localhost","root","","inventario");
        if ($objConexion->connect_errno)
        {
            echo "Error de conexión a la base de datos ".$objConexion->connect_error;
            exit();
        }
        else
        {
            return $objConexion;
        }
    }
?>