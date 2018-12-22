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
                        <li><a href="#"><i class="fas fa-user-circle"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fas fa-cog"></i> Configuració</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i></i> Salir</a>
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
                            <a class="active" href="#"><i class="fas fa-users"></i> Clientes<i class="fas fa-caret-down pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html"></a>
                                </li>
                                <li>
                                    <a href="morris.html"></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a class="" href="inventario.php"><i class="fas fa-scroll"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fas fa-file-signature"></i></i> Planillas</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-money-check-alt"></i> Contabilidad<i class="fas fa-caret-down pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html"></a>
                                </li>
                                <li>
                                    <a href="buttons.html"></a>
                                </li>
                                <li>
                                    <a href="notifications.html"></a>
                                </li>
                                <li>
                                    <a href="typography.html"></a>
                                </li>
                                <li>
                                    <a href="icons.html"></a>
                                </li>
                                <li>
                                    <a href="grid.html"></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-hand-holding-usd"></i> Cuentas por cobrar<i class="fas fa-caret-down pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-money-bill-wave"></i> Cuentas por pagar<i class="fas fa-caret-down pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html"></a>
                                </li>
                                <li>
                                    <a href="login.html"></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nombre del cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#datos-generales" data-toggle="tab">Datos generales</a>
                                </li>
                                <li><a href="#servicios" data-toggle="tab">Servicios</a>
                                </li>
                                <li><a href="#otros-datos" data-toggle="tab">Otros datos</a>
                                </li>
                                <li><a href="#ordenes-tecnicas" data-toggle="tab">Ordenes técnicas</a>
                                </li>
                                <li><a href="#notificaciones-traslados" data-toggle="tab">Notificaciones y traslados</a>
                                </li>
                                <li><a href="#quejas-reclamos" data-toggle="tab">Quejas y reclamos</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="datos-generales">
                                    <h4>Datos generales</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade in" id="servicios">
                                    <h4>Servicios</h4>
                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

                                      <!-- Accordion card -->
                                      <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingTwo1">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                                            aria-expanded="false" aria-controls="collapseTwo1">
                                            <h5 class="mb-0">
                                              TV POR CABLE <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                          </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordionEx1">
                                          <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf
                                            moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            Brunch
                                            3
                                            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch
                                            et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad
                                            vegan
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                        </div>

                                      </div>
                                      <!-- Accordion card -->

                                      <!-- Accordion card -->
                                      <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingTwo2">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                                            aria-expanded="false" aria-controls="collapseTwo21">
                                            <h5 class="mb-0">
                                              INTERNET <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                          </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21" data-parent="#accordionEx1">
                                          <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf
                                            moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            Brunch
                                            3
                                            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch
                                            et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad
                                            vegan
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                        </div>

                                      </div>
                                      <!-- Accordion card -->

                                      <!-- Accordion card -->
                                      <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingThree31">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
                                            aria-expanded="false" aria-controls="collapseThree31">
                                            <h5 class="mb-0">
                                              TELEFONIA <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                          </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31" data-parent="#accordionEx1">
                                          <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf
                                            moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            Brunch
                                            3
                                            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch
                                            et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad
                                            vegan
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                        </div>

                                      </div>
                                      <!-- Accordion card -->

                                    </div>
                                    <!-- Accordion wrapper -->
                                </div>
                                <div class="tab-pane fade" id="otros-datos">
                                    <h4>Otros datos</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="ordenes-tecnicas">
                                    <h4>Ordenes técnicas</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="notificaciones-traslados">
                                    <h4>Notificaciones y traslados</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="quejas-reclamos">
                                    <h4>Quejas y reclamos</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        </div><!-- /.row -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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

</body>

</html>
