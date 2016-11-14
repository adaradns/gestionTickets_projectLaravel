<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Historial Ticket</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Estilo propio-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cliente</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- Notificaciones -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                </li>
                <!-- Usuario sesion  -->
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
                        <!--Listar tickets-->
                        <li>
                            <a href="index.html"><i class="fa fa-ticket fa-fw"></i> Listar tickets</a>
                        </li>
                        <!--Desplegable tickets-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Algo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Algo mas</a>
                                </li>
                                <li>
                                    <a href="#">Algo mas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Crear tickets-->
                        <li>
                            <a href="crearticket.html"><i class="fa fa-plus-square fa-fw"></i>Crear ticket</a>
                        </li>
                        <!--Historial de ticket-->
                        <li>
                            <a href="forms.html"><i class="fa fa-history fa-fw"></i> Ver historial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente - Nombre</h1>
                </div>
            </div>
            <!-- fin row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Historial de ticket - Titulo {Esto seria por cada ticket que seleccione}</h4>
                        </div>
                        <div class="panel-body">
					<h4>Actualizacion de descripcion</h4>
                             	<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<small>fecha: 22/03/16</small><br /><br />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<small>fecha: 22/03/16</small><br /><br />
					
					<h4>Respuesta / Pregunta de empleado</h4>
					<hr>
					<p><b>Rta. Empleado Nombre:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<small>fecha: 22/03/16</small><br /><br />
					<p><b>Pregunta Empleado Nombre:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<small>fecha: 22/03/16</small><br /><br />
					<p><b>Pregunta Cliente  Nombre:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<small>fecha: 22/03/16</small><br /><br />
					
					<h4>Cambio de estado del ticket</h4>
					<hr>
					<p class="success"><b>Estado: </b>Finalizado</p>
					<small>fecha: 22/03/16</small><br /><br />
					<p class="warning"><b>Estado: </b>Asignado</p>
					<small>fecha: 22/03/16</small><br /><br />
					<p class="info"><b>Estado: </b>Escalo</p>
					<small>fecha: 22/03/16</small><br /><br />  	
				  	
						
                        </div>
                        <div class="panel-footer">
                            &copy Gestion de tickets
                        </div>
                    </div>
                </div>
                                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- fin wrapper -->

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
