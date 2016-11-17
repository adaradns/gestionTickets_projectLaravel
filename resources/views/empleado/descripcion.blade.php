@include('layouts.app')
    <div id="wrapper">

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
                            <a href="{{route('empleado.empleado.index')}}"><i class="fa fa-ticket fa-fw"></i> Listar tickets asignados</a>
                        </li>
                        <!--Ingresar a la bandeja de entrada del empleado de primera linea-->
                        <li>
                            <a href="#"><i class="fa fa-list-ul fa-fw"></i> bandeja de entrada</a>
                        </li>
                        <!--Desplegable tickets-->
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
   
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Panel principal -->
                      
                            <h3>Ticket asignado</h3>
                            <hr>
                            <div class="buttons">
                                <button class="btn btn-grey"><a id="link-historial" href="#">Ver historial</a></button>
                                <button class="btn btn-grey"><a id="redirigirTicket" href="#">Redirigir ticket</a></button>
                                <button class="btn btn-grey"><a id="finalizarTicket" href="#">Finalizar ticket</a></button>
                                <button class="btn btn-grey"><a id="encuestaDeSastifaccion" href="#">Ver resultado de encuesta de sastifaccion</a></button>
                            </div>
                           <div style="display: none;" class="historial">
                                  <table class="table table-bordered table-hover table-striped">
                                            <thead >
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Motivos</th>
                                                    <th>Responsable</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>11/04/2016</td>
                                                    <td>Cambio de estado: Finalizado</td>
                                                    <td>Lala</td>
                                                </tr>  
                                                <tr>
                                                    <td>04/11/1991</td>
                                                    <td>Nota del empleado</td>
                                                    <td>lala</td>
                                                </tr>
                                                <tr>
                                                    <td>04/11/1991</td>
                                                    <td>Nota del cliente</td>
                                                    <td >Jorge</td>
                                                </tr>
                                                <tr>
                                                    <td>04/11/1991</td>
                                                    <td>Cambio de estado: Asignado</td>
                                                    <td >lala</td>
                                                </tr>
                                                <tr>
                                                    <td>04/11/1991</td>
                                                    <td>Cambio de estado: Escalo</td>
                                                    <td>Pepe</td>
                                                </tr>
                                                <tr>
                                                    <td>04/11/1991</td>
                                                    <td>Nota del empleado</td>
                                                    <td>Pepe</td>
                                                </tr>                                          
                                            </tbody>
                                        </table>
                           </div>
                           <!--CONTENIDO -->
                            <hr>
                            <div class="content">
                                <article>
                                    <h2>Titulo del ticket: {{$ticket->titulo}}</h2>
                                    <p class="descripcion">Descripcion: <br>{{$ticket->descripcion}}</p>
                                </article>
                                <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>s
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                            
                </div>
     
                
        </div>
        <!-- /#page-wrapper -->
        
                
    </div>
    <!-- /#wrapper -->

    <!--MODALS Finalizar ticket-->
    <div class="modal fade" id="modal-finalizarTicket" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Ticket finalizado</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Se ha cerrado el ticket</label>
                                </div>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <input type="submit" value="Ok" name="Ok" id="btnOk" class="btn btn-primary"/>
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--MODALS Redirigir ticket main-->
    <div class="modal fade" id="modal-redirigirTicket" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Redirigiendo ticket</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">¿A donde desea redirigir el ticket?</label>
                                </div>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-lg btn-block" id="empleadoEspecifico">A un empleado especifico</button>
                        <button class="btn btn-primary btn-lg btn-block" id="bandejaDeEntrada">A otra bandeja de entrada</button>
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--MODAL LISTA DE EMPLEADOS-->
    <div class="modal fade" id="modal-listaDeEmpleados" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Encuesta de sactifaccion</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                    <label for="">¿A quien desea redirigir el ticket?</label>
                            </div>
                        </div>

                    <div class="modal-footer row">
                        <div class="list-group">
                          <a href="#" class="list-group-item">Empleado 1</a>
                          <a href="#" class="list-group-item">Empleado 2</a>
                          <a href="#" class="list-group-item">Empleado 3</a>
                          <a href="#" class="list-group-item">Empleado 4</a>
                          <a href="#" class="list-group-item">Empleado 5</a>
                        </div>
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--MODAL A OTRA BANDEJA DE ENTRADA-->
    <div class="modal fade" id="modal-bandejaDeEntrada" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Encuesta de sactifaccion</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                    <label for="">Se ha redirijido a otra badeja de entrada</label>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button type="button" id="okBandejaDeEntrada" class="btn btn-primary pull-right">Ok</button>
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--MODAL DE ENCUESTA DE SASTIFACCION-->
    <div class="modal fade" id="modal-resultadoEncuesta" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Resultado de la encuesta de sactifaccion</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="respuesta1">¿Le sirvió la respuesta?</label>
                                    <p id="respuesta1">Si</p>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="respuesta2">¿Como calificaria al empleado?
                                        <p id="respuesta2">5</p>
                                   </label>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="respuesta3">¿Como calificaria su respuesta?
                                        <p id="respuesta3">7</p>
                                   </label>
                                </div>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <input type="submit" value="Enviar" name="enviar" id="btnEnviar" class="btn btn-primary" style="display: none;" />
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /.MODALS-->

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
