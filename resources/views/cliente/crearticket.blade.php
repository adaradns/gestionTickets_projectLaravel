<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario crear ticket</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--Hoja de estilo propio-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Importando estilos personalizados -->
    <link href="../css/estilos-crearTicket.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-cliente.html">Cliente</a>
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
                            <a href="index-cliente.html"><i class="fa fa-ticket fa-fw"></i> Listar tickets</a>
                        </li>
                       
                        <!-- Crear tickets-->
                        <li>
                            <a href="crearticket.html"><i class="fa fa-plus-square fa-fw"></i>Crear ticket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Crear ticket</h1>
                </div>
                <!--col-lg-12 -->
            </div>
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Formulario para crear ticket
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--Contenido de formulario-->
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="tituloTicket">Titulo del ticket</label>
                                            <input type="text" class="form-control" id="tituloTicket" aria-describedby="emailHelp" placeholder="Ingrese titulo del ticket" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcionTicket">Descripcion del ticket</label>
                                            <textarea class="form-control" placeholder="Ingrese una descripcion"id="descripcionTicket" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="prioridadTicket">Prioridad del ticket</label>
                                            <select class="form-control" id="prioridadTicket">
                                                <option value="Baja">Baja</option>
                                                <option value="Media">Media</option>
                                                <option value="Alta">Alta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipoTicket">Tipo de ticket</label>
                                            <select class="form-control" id="tipoTicket">
                                                <option value="problema">Problema</option>
                                                <option value="Consulta">Consulta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="imagenProblema">Ingrese una imagen</label>
                                            <input type="file" class="form-control-file" id="imagenProblema" aria-describedby="imgProblema">
                                            <small id="imgProblema" class="form-text text-muted">Ingrese una imagen mostrando el problema o consulta para poder dar un mejor detalle a los encargados.</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Enviar reclamo</button>
                                    </form>
                                    <!--FIN Contenido de formulario-->
                                </div>
        
                            </div>
                            <!-- fin row -->
                        </div>
                        <!-- fin panel-body -->
                    </div>
                    <!-- fin panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
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

</body>

</html>
