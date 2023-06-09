<?php
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header('location: ../index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/estiloindex2.css" />
    <link rel="stylesheet" href="http://localhost/proyectoinventarioactualizado2/CSS/estiloindex2.css">

    <title>inventario CRAYOLA</title>
  </head>

  <body class="inicio">
    <div class="container-fluid contenido">
      <div class="row">
        <nav class="barra">
          <div class="col s12 barra">
            <div class="nav-wrapper">
              <img src="../imagenes/crayola3.png" width="150rem" class="logo2" />
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../PHP/cerrarSesion.php">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="col s2 prueba1">
          <div class="row prueba3">
            <a
              href="./index1.html"
              class="waves-effect waves-light btn-small opciones"
              ><i class="material-icons right">first_page</i>Opciones</a
            >
            <a
              href="#"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">home</i>Inicio</a
            >
            <a
              href="../PHP/productos.php"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">shopping_basket</i>Productos</a
            >
            <a
              href="./categorias.html"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">apps</i>Categorías</a
            >
            <a
              href="./clientes.html"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">people</i>Clientes</a
            >
            <a
              href="./proveedores.html"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">person</i>Proveedores</a
            >
            <a
              href="./compras.html"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">shopping_cart</i>Ventas</a
            >
            <a
              href="./reporteventas.html"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">trending_up</i>Reporte General</a
            >
            <a
              href="#"
              class="waves-effect waves-light btn-small menubtn"
              ><i class="material-icons left">settings</i>Configuración</a
            >
          </div>
        </div>
        <div class="col s10 prueba2">
          <div class="row">
            <div class="col s3">
              <div class="card cards1">
                <a class="boton1" href="../PHP/productos.php"></a>
                <div class="box1">
                  <i class="material-icons left white-text medium center1"
                    >view_quilt</i
                  >
                </div>
                <a
                  href="../PHP/productos.php"
                  class="waves-effect waves-light btn btn1"
                  ><b>PRODUCTOS</b></a
                >
              </div>
            </div>
            <div class="col s3">
              <div class="card cards1">
                <div class="box1">
                  <i class="material-icons left white-text medium center1"
                    >shopping_cart</i
                  >
                </div>
                <a href="/HTML/compras.html" class="waves-effect waves-light btn btn1"
                  ><b>VENTAS</b></a
                >
              </div>
            </div>
            <div class="col s3">
              <div class="card cards1">
                <div class="box1">
                  <i class="material-icons left white-text medium center1"
                    >person_pin</i
                  >
                </div>
                <a
                  href="/HTML/proveedores.html"
                  class="waves-effect waves-light btn btn1"
                  ><b>PROVEEDORES</b></a
                >
              </div>
            </div>
            <div class="col s3">
              <div class="card cards1">
                <div class="box1">
                  <i class="material-icons left white-text medium center1"
                    >storage</i
                  >
                </div>
                <a
                  href="/HTML/categorias.html"
                  class="waves-effect waves-light btn btn1"
                  ><b>CATEGORÍAS</b></a
                >
              </div>
            </div>
            <div class="col s8">
              <div class="card cards2">
                <div class="box2">
                  <span class="card-title titulo1">Últimas ventas</span>
                </div>
                <div class="card-content">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>productos</th>
                        <th>Valor</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>18</td>
                        <td>100123490</td>
                        <td>
                          Caja de Lapiceros<br />
                          Marcadores Sharpie<br />
                          Kit de escuadras<br />
                        </td>
                        <td>$ 25.000</td>
                      </tr>
                      <tr>
                        <td>19</td>
                        <td>100289328</td>
                        <td>Bitácora Tamaño Oficio</td>
                        <td>$ 8.000</td>
                      </tr>
                      <tr>
                        <td>20</td>
                        <td>2178399</td>
                        <td>Paquete de bombas R12</td>
                        <td>$ 3.000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col s4">
              <div class="card cards3">
                <div class="box2">
                  <span class="card-title titulo1">Productos más vendidos</span>
                </div>
                <div class="card-content">
                  <table>
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Cantidad vendida</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Caja de lápices mirado 2</td>
                        <td>35</td>
                      </tr>
                      <tr>
                        <td>Kit regreso a clases</td>
                        <td>27</td>
                      </tr>
                      <tr>
                        <td>Paquete de bombas para fiestas</td>
                        <td>20</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
