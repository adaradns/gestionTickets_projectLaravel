<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion de tickets | Empleado de primera linea</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--Hoja de estilo propio-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><script src="../js/app.js"></script>
    <![endif]-->

</head>

<body>
    <!--empleado de primera linea-->
    <div id="empleadoLinea1">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-empleado1.html">Empleado de primera linea</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- Notificaciones -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> 
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Nueva notificacion
                                    <span class="pull-right text-muted small">hace 5 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                       
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                <!-- Fin notificaciones -->
                </li>
                <!-- Usuario sesion -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil de usuario</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                <!-- Usuario sesion  -->
                </li>
                
            </ul>
            <!-- Fin navbar -->

            <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <!--Listar tickets asignados-->
                        <li>
                            <a href="index-empleado1.html"><i class="fa fa-ticket fa-fw"></i> Listar tickets asignados</a>
                        </li>
                        <!--Ingresar a la bandeja de entrada del empleado de primera linea-->
                        <li>
                            <a href="bandeja de entrada empleado1.html"><i class="fa fa-list-ul fa-fw"></i> bandeja de entrada</a>
                        </li
                        <!--Desplegable tickets-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Filtro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estado<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Creado</a></li>
                                        <li><a href="#">Asignado</a></li>
                                        <li><a href="#">Finalizado</a></li>
                                        <li><a href="#">Escalado</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tipo de ticket<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Consulta</a></li>
                                        <li><a href="#">Problema</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <!--/.Navigation -->
        </nav>

        <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><a href="bandeja de entrada empleado1.html"> Bandeja de entrada de primera linea </a>/</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Panel principal -->
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <i class="fa fa-ticket fa-fw"></i>Tickets creados
                        </div>
                        <div class="panel-body">
                           
                                      <table class="table table-bordered table-hover table-striped">
                                            <thead >
                                                <tr>
                                                    <th>Titulo</th>
                                                    <th>Estado</th>
                                                    <th>Prioridad</th>
                                                    <th>Ver mas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td><p class="success">Bajo</p></td>
                                                    <td><a href="autoasignacion empleado1.html"><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td><p class="warning">Medio</p></td>
                                                    <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td ><p class="danger">Critico</p></td>
                                                    <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td ><p class="danger">Critico</p></td>
                                                    <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td ><p class="warning">Medio</p></td>
                                                    <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td><p class="success">Bajo</p></td>
                                                    <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem Ipsum</td>
                                                    <td>Creado</td>
                                                    <td ><p class="warning">Medio</p></td>
                                                     <td><button class="pull-right btn info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                </tr>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Fin table -->
                                    <div class="text-center">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                         <li><a href="#">2<span class="sr-only"></span></a></li>
                                         <li><a href="#">3<span class="sr-only"></span></a></li>
                                         <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

    <script type="text/javascript" src="../js/app.js"></script>

</body>

</html>
