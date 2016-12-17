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
                            <a href="{{url('empleado/indexFinalizado')}}"><i class="fa fa-check" aria-hidden="true"></i></i>Tickets finalizados</a>
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
                                <button class="btn btn-grey"><a href="{{route('empleado.historial.show', $ticket->id)}}"> <i class="fa fa-history fa-fw"></i>Ver historial</a></button>
                                <button class="btn btn-grey"><a  id="autoasignar" href="#">Auto-asignar</a></button>
                            </div>
                         
                            <hr>
                            <div class="content">
                                <article>
                                    <h2>Titulo del ticket: {{$ticket->titulo}}</h2>
                                    <h3>Motivo del ticket:
                                    @if($ticket->id_problema === 1)
                                        Consulta</h3>
                                    @elseif($ticket->id_problema === 2)
                                        Problema</h3>
                                    @endif
                                    <p class="descripcion">Descripcion: {{$ticket->descripcion}}</p>
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
                                @foreach($mensajes as $mensaje)
                                    @if($mensaje->id_usuario == $ticket->id_cliente)
                                        <li class="left clearfix">
                                            <span class="chat-img pull-left">
                                                <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">{{$ticket->cliente->nombre}}</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> {{$mensaje->created_at}}
                                                    </small>
                                                </div>
                                                <p>
                                                    {{$mensaje->descripcion}}
                                                </p>
                                            </div>
                                        </li>
                                    @else
                                        @if($ticket->id_responsable != NULL)
                                            <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                                </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted">
                                                            <i class="fa fa-clock-o fa-fw"></i>{{$mensaje->created_at}}</small>
                                                        <strong class="pull-right primary-font">{{$ticket->responsable->nombre}}</strong>
                                                    </div>
                                                    <p>
                                                        {{$mensaje->descripcion}}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
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
                        <input type="submit" value="Ok" name="Ok" id="btnOk" class="btn btn-primary" />
                    </div>      
                   </form> 
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

