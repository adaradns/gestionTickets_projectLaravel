@include('layouts.app')
        <!-- Menu items-->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--Listar tickets asignados-->
                    <li>
                        <a href="{{route('empleado.empleado.index')}}"><i class="fa fa-ticket fa-fw"></i> Listar tickets asignados</a>
                    </li>
                     <!--Ingreso a bandeja de tickets finalizados-->
                        <li>
                            <a href="{{url('empleado/indexFinalizado')}}"><i class="fa fa-list-ul fa-fw"></i>Tickets finalizados</a>
                        </li>
                    <!--Ingresar a la bandeja de entrada del empleado de primera linea-->
                    <li>
                        <a href="{{url('empleado/indexCreado')}}"><i class="fa fa-list-ul fa-fw"></i> bandeja de entrada</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                            <h3>Autoasignar ticket</h3>
                            <hr>
                            <input type="hidden" name="" value="{{$ticket->id}}" id="idTicket">
                            <div class="buttons">
                                <button class="btn btn-grey"><a id="link-historial" href="#">Ver historial</a></button>
                                <button class="btn btn-grey"><a  id="autoasignar" href="#">Auto-asignar</a></button>
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
                                                    <td>Redirijido a bandeja de entrada</td>
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
                                    <h2>{{$ticket->titulo}}</h2>
                                    <p class="descripcion">{{$ticket->descripcion}}</p>
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
        
                
        </div>
        <!-- /#page-wrapper -->
        
                
    </div>
    <!-- /#wrapper -->

    <!--MODALS-->
    <div class="modal fade" id="modal-ticketAsignado" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Auto-asignacion de ticket</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    Se ha redirijido el ticket a su lista de tickets asignados
                                </div>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <input type="submit" value="ok" name="btnAceptar" id="btnAceptar" class="btn btn-primary" />
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

