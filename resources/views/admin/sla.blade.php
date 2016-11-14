<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion de tickets | Administrador</title>

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
                <a class="navbar-brand" href="index-administrador.html">Administrador</a>
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
                        <!--Listar usuarios-->
                        <li>
                            <a href="index-administrador.html"><i class="fa fa-ticket fa-fw"></i> Listar usuarios</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="crearUsuario.html"><i class="fa fa-plus-square fa-fw"></i>Crear usuario</a>
                        </li>
                        <!--SLA-->
                        <li>
                            <a href="sla.html"><i class="fa fa-ticket fa-fw"></i>SLA</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><a href="#">SLA</a> /</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Panel principal -->
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <i class="fa fa-user fa-fw"></i>SLA
                        </div>
                        <div class="panel-body" >
                            
                            <form>
                                <div class="form-group col-md-4">
                                    <label>Cantidad de dias para los tickets de criticidad baja</label>
                                    <input class="form-control" type="number" name=""><br />
                                    <div class="button">
                                        <input type="submit" name="" value="Enviar" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                            <form>
                                <div class="form-group col-md-4">
                                    <label>Cantidad de dias para los tickets de criticidad media</label>
                                    <input class="form-control" type="number" name=""><br />
                                     <div class="button">
                                        <input type="submit" name="" value="Enviar" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                            <form>
                                <div class="form-group col-md-4">
                                    <label>Cantidad de dias para los tickets de criticidad alta</label>
                                    <input class="form-control" type="number" name=""><br />
                                     <div class="button">
                                        <input type="submit" name="" value="Enviar" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>                    
                        </div>
                        <div class="panel-footer">
                            &copy Gestion de tickets
                        </div>
                    </div>
                </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
               
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--MODAL VER INFO USUARIO-->
    <div class="modal fade" id="modal-users" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="gridSystemModalLabel">Informacion empleado Leonardo</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-group">
                                  <p>Nombre: Leonardo</p>
                                  <div class="form-group">
                                  <label for="selTipoUsuario">Tipo de usuario:</label>
                                  <select class="form-control" name="selTipoUsuario" id="selTipoUsuario">
                                      <option value="Empleado de 1° Linea">Empleado de 1° Linea</option>
                                      <option value="Empleado de 2° Linea">Empleado de 2° Linea</option>
                                      <option value="Analista">Analista</option>
                                  </select>
                                  </div>
                                  <p>E-mail: leogonzales@gmail.com</p>
                                  <p>Nombre de usuario: leogon</p>
                                  <p>Fecha de nacimiento: 10/11/1980</p>
                                  <div class="modal-footer">
                                      <div class="col-sm-12">
                                        <input type="submit" value="Enviar" name="enviar" id="btnEnviar"  class="btn btn-primary"/>
                                      </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--/.MODAL VER INFO USUARIO-->

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
