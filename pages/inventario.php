<?php
    require("../php/getInventory.php");
    require("../php/productsInfo.php");

    // Trae el inventario completo de la base de datos
    $getInventory = new GetInventory();
    $recordsInfo = $getInventory->showInventoryRecords();

    // Métodos para traer la información de los productos
    $productsInfo = new ProductsInfo();
    $categories = $productsInfo->getCategories();
    $subCategories = $productsInfo->getSubCategories();
    $um = $productsInfo->getMeasurements();
    $warehouses = $productsInfo->getWarehouses();
    $departments = $productsInfo->getDepartments();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cablesat</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/custom-principal.css">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <!--<link rel="stylesheet" href="../vendor/datatables/css/dataTables.bootstrap.min.css"> -->
    <!--<link rel="stylesheet" href="../vendor/datatables/css/jquery.dataTables.min.css"> -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cablesat</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Diego Herrera
                        <i class="far fa-user"></i> <i class="fas fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="perfil.php"><i class="fas fa-user-circle"></i> Perfil</a>
                        </li>
                        <li><a href="config.php"><i class="fas fa-cog"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.html"><i class="fas fa-home"></i> Principal</a>
                        </li>
                        <li>
                            <a class="" href="infoCliente.php"><i class="fas fa-users"></i> Clientes</a>
                        </li>
                        <li>
                            <a href="inventario.php"><i class="fas fa-scroll"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="planillas.php"><i class="fas fa-file-signature"></i></i> Planillas</a>
                        </li>
                        <li>
                            <a href="contabilidad.php"><i class="fas fa-money-check-alt"></i> Contabilidad</a>
                        </li>
                        <li>
                            <a href="bancos.php"><i class="fas fa-university"></i> Bancos</a>
                        </li>
                        <li>
                            <a href="cxc.php"><i class="fas fa-hand-holding-usd"></i> Cuentas por cobrar</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-money-bill-wave"></i> Cuentas por pagar</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                    <h1 class="page-header alert alert-info">Inventario</h1>
                    <?php
                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'success') {
                            echo "<div id='temporal' class='alert alert-warning alert-dismissible'>
                                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                      Su registro <strong>ingresó</strong> con exito.
                                  </div>";
                        }
                        else if ($_GET['status'] == 'failed'){
                            echo "<div id='temporal' class='alert alert-danger alert-dismissible'>
                                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                      Su registro <strong>falló.</strong>
                                  </div>";
                        }
                    }
                    else {
                        echo "<div id='temporal'> </div>";
                    }
                    ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <form class="" action="resumenTraslado.php" method="post">

                <button id="traslados" type="submit" class="btn btn-default pull-left" disabled = "disabled"><i class='fas fa-truck'></i> Traslado de producto</button>

                <button class="btn btn-primary pull-right" type="button" name="button" data-toggle="modal" data-target="#agregar"><i class="fas fa-plus-circle"></i> Agregar</button>
                <br><br>
                <div class="col-lg-12 estadistics">
                    <table width="100%" class="table table-striped table-hover" id="inventario">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($recordsInfo as $key) {
                                    echo "<tr><td>";
                                    echo "<input type='checkbox' class='form-control checkbox' name='checkTraslado[]' value=".$key['IdArticulo'].">" . "</td><td>";
                                    echo $key["IdArticulo"] . "</td><td>";
                                    echo $key["Codigo"] . "</td><td>";
                                    echo $key["Nombre"] . "</td><td>";
                                    echo $key["Descripcion"] . "</td><td>";
                                    echo $key["Cantidad"] . "</td><td>";
                                    echo $key["PrecioCompra"] . "</td><td>";
                                    echo "<div class='btn-group pull-right'>
                                                <button type='button' class='btn btn-default'>Opciones</button>
                                                <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                  <span class='caret'></span>
                                                  <span class='sr-only'>Toggle Dropdown</span>
                                                </button>
                                                <ul class='dropdown-menu'>
                                                    <li><a href='#'><i class='fas fa-eye'></i> Ver</a>
                                                    </li>
                                                    <li><a href='#'><i class='fas fa-edit'></i> Editar</a>
                                                    </li>
                                                    <li><a href='login.html'><i class='fas fa-trash-alt'></i> Eliminar</a>
                                                    </li>
                                                    <li class='divider'></li>
                                                    <li><a href='index.html' id='idArticulo' onclick='transferProduct(".$key['IdArticulo'].")'><i class='fas fa-truck'></i> Traslado de producto</a>
                                                    </li>

                                                </ul>
                                            </div>" . "</td></tr>";
                                        }
                                    ?>
                        </tbody>
                    </table>
                    </form>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <h4>Inventario Cablesat</h4>
                        <p>El presente inventario está conformado por todos y cada uno de los artículos que se encuentran almacenados en las bodegas de Cablesat u objetos que se encuentran en uso en las diferentes unidades de la empresa. Ver información en: <a target="_blank" href="https://cablesat.net/">https://cablesat.net/</a>.</p>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://cablesat.com/">Generar reporte</a>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Add modal -->

    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="agregar">
          <div class="modal-dialog" role="document">
                <div class="modal-content">
                      <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="nuevoProducto">Nuevo producto</h4>
                      </div>
                      <div class="modal-body">
                            <form action="../php/enterProduct.php" method="post">
                                  <div class="form-row">
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="codigo">Código</label>
                                          <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código del producto">
                                      </div>
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="fecha">Fecha</label>
                                          <input type="text" class="form-control" name="fecha" id="fecha" placeholder="">
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-12 col-xs-12">
                                          <label for="codigo">Nombre</label>
                                          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto">
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="proveedor">Proveedor</label>
                                          <input type="text" class="form-control" name="proveedor" id="proveedor" placeholder="Proveedor">
                                      </div>
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="cantidad">Cantidad</label>
                                          <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad">
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="Tipo de producto">Tipo de producto</label>
                                          <select class="form-control form-control-lg" name="tProducto">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <option value="">Para instalaciones</option>
                                              <option value="">Para consumo</option>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="categoria">Categoria</label>
                                          <select class="form-control form-control-lg" name="categoria">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <?php
                                                foreach ($categories as $key) {
                                                    echo "<option value=".strtolower($key['Nombre'])." >".$key['Nombre']."</option>";
                                                }
                                              ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="subCategoria">Sub categoria</label>
                                          <select class="form-control form-control-lg" name="subCategoria">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <?php
                                              foreach ($subCategories as $key) {
                                                  echo "<option value=".strtolower($key['Nombre'])." >".$key['Nombre']."</option>";
                                              }
                                              ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="bodega">Bodega</label>
                                          <select class="form-control form-control-lg" name="bodega">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <?php
                                                foreach ($warehouses as $key) {
                                                    echo "<option value=".strtolower($key['Nombre'])." >".$key['Nombre']."</option>";
                                                }
                                              ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-6 col-xs-6">
                                          <label for="departamento">Departamento</label>
                                          <select class="form-control form-control-lg" name="departamento">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <?php
                                                foreach ($departments as $key) {
                                                    echo "<option value=".strtolower($key['Nombre'])." >".$key['Nombre']."</option>";
                                                }
                                              ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="precio de compra">Precio de compra (U)</label>
                                          <input type="text" class="form-control" name="pCompra" id="pCompra" placeholder="Precio de compra">
                                      </div>
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="precio de venta">Precio de venta (U)</label>
                                          <input type="text" class="form-control" name="pVenta" id="pVenta" placeholder="Precio de venta">
                                      </div>
                                      <div class="form-group col-md-4 col-xs-4">
                                          <label for="um">Unidad de medida</label>
                                          <select class="form-control form-control-lg" name="um">
                                              <option value="" selected="selected">Seleccionar...</option>
                                              <?php
                                              foreach ($um as $key) {
                                                  echo "<option value=".strtolower($key['Nombre'])." >".$key['Nombre']."</option>";
                                              }
                                              ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-12 col-xs-12">
                                            <label for="message-text" class="control-label">Descripción:</label>
                                            <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Agregue una breve descripcion del producto"></textarea>
                                      </div>
                                  </div>
                      </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            </form>
                      </div>
                </div>
          </div>
    </div><!-- /Add modal -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/dataTables.bootstrap.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#inventario').DataTable({
            responsive: true,
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontró ningún registro",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontró ningún registro",
            "search": "Buscar: ",
            "searchPlaceholder": "",
            "infoFiltered": "(de un total de _MAX_ total registros)",
            "paginate": {
             "previous": "Anterior",
             "next": "Siguiente"
            }
        }
        });
    });
    </script>

    <script type="text/javascript">
        function transferProduct(id) {
            window.location = "index.html?id="+id;
        }
    </script>

    <script type="text/javascript">
        $(function() {
            $(".checkbox").click(function(){
                $('#traslados').prop('disabled',$('input.checkbox:checked').length == 0);
            });
        });
    </script>

    <script type="text/javascript">
        var d = new Date();
        var month = String((parseInt(d.getMonth()+1)))
        document.getElementById("fecha").value = d.getDate()+"/"+month+"/"+d.getFullYear();
    </script>

</body>

</html>
