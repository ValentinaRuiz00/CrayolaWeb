<?php
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header('location: ../index.html');
}

require "conexionBasesDatos.php";

$objConexion = new mysqli($host, $user, $password, $baseDatos);

if ($objConexion->connect_errno) {
    echo "Error de conexión a la Base de Datos " . $objConexion->connect_error;
    exit();
}

$sql = "select * from productos where catProducto='Piñatería'";

$resultado = $objConexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/estilocategorias.css">
    <link rel="stylesheet" href="http://localhost/proyectoinventarioactualizado2/CSS/estilocategorias.css">
    <title>Productos</title>
</head>

<body class="inicio">
    <div class="container-fluid contenido">
        <div class="row">
            <nav class="barra">
                <div class="col s12 barra">
                    <div class="nav-wrapper">
                        <img src="../imagenes/crayola3.png" width="150rem" class="logo2">
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="../PHP/cerrarSesion.php">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col s2 prueba1">
                <div class="row prueba3">
                    <a href="../HTML/index1.html" class="waves-effect waves-light btn-small opciones"><i class="material-icons right">first_page</i>Opciones</a>
                    <a href="../HTML/index2.php" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">home</i>Inicio</a>
                    <a href="../PHP/productos.php" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">shopping_basket</i>Productos</a>
                    <a href="../HTML/categorias.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">apps</i>Categorías</a>
                    <a href="../HTML/clientes.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">people</i>Clientes</a>
                    <a href="../HTML/proveedores.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">person</i>Proveedores</a>   
                    <a href="../HTML/compras.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">shopping_cart</i>Ventas</a>
                    <a href="../HTML/reporteventas.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">trending_up</i>Reporte General</a>
                    <a href="../HTML/configuracion.html" class="waves-effect waves-light btn-small menubtn"><i class="material-icons left">settings</i>Configuración</a>
                </div>
            </div>
            <div class="col s10 prueba2">
                <div class="row selector">
                <div class="col s4">
                        <div class="card cards1">
                            <a class="boton1" href="papeleria.php"></a>
                            <div class="box1">
                                <i class="material-icons left white-text medium center1">straighten</i>
                            </div>
                            <a href="papeleria.php" class="waves-effect waves-light btn btn1"><b>PAPELERÍA</b></a>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card cards1">
                            <a class="boton1" href="productos.php"></a>
                            <div class="box1">
                                <i class="material-icons left white-text medium center1">toys</i>
                            </div>
                            <a href="pinateria.php" class="waves-effect waves-light btn btn1"><b>PIÑATERÍA</b></a>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card cards1">
                            <a class="boton1" href="productos.php"></a>
                            <div class="box1">
                                <i class="material-icons left white-text medium center1">laptop_chromebook</i>
                            </div>
                            <a href="tecnologia.php" class="waves-effect waves-light btn btn1"><b>TECNOLOGÍA</b></a>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="card cards2">
                            <div class="card-content">
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Producto</th>
                                            <th>Categoría</th>
                                            <th>Cantidad</th>
                                            <th>Precio de Venta</th>
                                        </tr>
                                    </thead>

                                    <tbody>







                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                                        <?php
                                        while($datos=$resultado->fetch_array())
                                        {
                                        ?>

                                            <tr>
                                                <td><?php echo $datos['codProducto']?></td>
                                                <td><?php echo $datos['nomProducto']?></td>
                                                <td><?php echo $datos['catProducto']?></td>
                                                <td><?php echo $datos['cantProducto']?></td>
                                                <td><?php echo $datos['valProducto']?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>