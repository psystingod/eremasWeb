<?php
    require("../php/translateProcess.php");
    $tp = new TranslateProcess();
    $tpArray = $tp->getProductsTranslated();

    require("../php/productsInfo.php");

    // Métodos para traer la información de los productos
    $productsInfo = new ProductsInfo();
    $warehouses = $productsInfo->getWarehouses();

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
                            <a class="active" href="inventario.php"><i class="fas fa-scroll"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="planillas.php"><i class="fas fa-file-signature"></i></i> Planillas</a>
                        </li>
                        <li>
                            <a href="contabilidad.php"><i class="fas fa-money-check-alt"></i> Contabilidad</a>
                        </li>
                        <li>
                            <a href="cxc.php"><i class="fas fa-hand-holding-usd"></i> Cuentas por cobrar</a>
                        </li>
                        <li>
                            <a href="cxp.php"><i class="fas fa-money-bill-wave"></i> Cuentas por pagar</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <form class="" action="translateSuccess.php" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Resumen de traslado</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="bodegaOrigen">Bodega de origen</label>
                            <select class="form-control form-control-lg" name="bodegaOrigen">
                                <option value="" selected="selected">Seleccionar...</option>
                                <?php
                                  foreach ($warehouses as $key) {
                                      echo "<option value=".str_replace(' ', '', $key['NombreBodega'])." >".$key['NombreBodega']."</option>";
                                  }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="bodegaDestino">Bodega de destino</label>
                            <select class="form-control form-control-lg" name="bodegaDestino">
                                <option value="" selected="selected">Seleccionar...</option>
                                <?php
                                  foreach ($warehouses as $key) {
                                      echo "<option value=".str_replace(' ', '', $key['NombreBodega'])." >".$key['NombreBodega']."</option>";
                                  }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <br>
                            <table class="table table-striped">
                                <th>Id</th>
                                <th>Artículo</th>
                                <th>Bodega</th>
                                <th>Existencias</th>
                                <th>Cantidad a trasladar</th>
                                <?php
                                    foreach ($tpArray as $article) {
                                        $i = 0;
                                        echo "<tr><td>";
                                        echo '<input type=text class=form-control name=algo value="' . $article[$i]['IdArticulo'] . '" disabled></td><td>';
                                        echo '<input type=text class=form-control name=algo value="' . $article[$i]['NombreArticulo'] . '" disabled></td><td>';
                                        echo '<input type=text class=form-control name=algo value="' . $article[$i]['NombreBodega'] . '" disabled></td><td>';
                                        echo '<input type=text class=form-control name=algo value="' . $article[$i]['Cantidad'] . '" disabled></td><td>';
                                        echo "<input type='text' class='form-control' name='articleToBeTraslated[]' value='' placeholder='Ingresar cantidad a trasladar'>" . "</td><tr>";
                                        $i++;
                                    }
                                ?>
                            </table>
                        </div>
                    </div><!-- /.row -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <h5><strong>Razón por la cual se realiza el traslado</strong></h5>
                    <textarea class="" name="justificacion" rows="5" cols="80"></textarea><br>
                    <button type="submit" class="btn btn-default">Volver a inventario</button>
                    <button type="submit" class="btn btn-primary">Realizar traslado</button>
                </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
