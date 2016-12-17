@include('layouts.app')
    <div id="wrapper">

       <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <!--Listar tickets-->
                        <li>
                            <a href="{{route('empleado.empleado.index')}}"><i class="fa fa-ticket fa-fw"></i> Listar tickets asignados</a>
                        </li>
                         <!--Ingreso a bandeja de tickets finalizados-->
                        <li>
                            <a href="{{url('empleado/indexFinalizado')}}"><i class="fa fa-ch
                            k" aria-hidden="true"></i>Tickets finalizados</a>
                        </li>
                        <!--Ingresar a la bandeja de entrada del empleado de primera linea-->
                        <li>
                            <a href="{{url('empleado/indexCreado')}}"><i class="fa fa-list-ul fa-fw"></i> bandeja de entrada</a>
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
                            @if($ticket->id_estado === 2)    
                                <h3>Ticket Asignado</h3>
                            @elseif($ticket->id_estado === 3)
                                <h3>Ticket Finalizado</h3>
                            @endif
                            <hr>
                            <input type="hidden" name="" value="{{$ticket->id}}" id="idTicket">
                            <div class="buttons">
                                <button class="btn btn-grey"><a href="{{route('empleado.historial.show', $ticket->id)}}"> <i class="fa fa-history fa-fw"></i>Ver historial</a></button>
                                @if($ticket->id_estado === 2 and $encontrado === 0)
                                    <button class="btn btn-grey"><a id="redirigirTicket" href="#">Redirigir ticket</a></button>
                                    <button class="btn btn-grey"><a id="finalizarTicket" href="#">Finalizar ticket</a></button>
                                @elseif($ticket->id_estado == 3 and $encontrado === 1)
                                     <button class="btn btn-grey"><a id="encuestaDeSastifaccion" href="#">Ver resultado de encuesta de sastifaccion</a></button>
                                @endif
                            </div>
                            
                           <!--CONTENIDO -->
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
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            @if($ticket->id_estado === 2)
                                {!! Form::open(['route' => 'empleado.mensajes.store', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        {!! Form::text('descripcion', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ingrese su mensaje aqui...', 'required']) !!}

                                        <span class="input-group-btn">
                                            {!! Form::submit('Send', ['class' => 'btn btn-warning btn-sm']) !!}
                                        </span>
                                    </div>
                                    {!! Form::hidden('ticket_id', $ticket->id) !!}
                                    {!! Form::hidden('id_usuario', $ticket->id_responsable) !!}
                                {!! Form::close() !!}
                            @endif
                            
                            <!--<div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>-->
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
                                    <p id="respuesta1">
                                        @if($encontrado === 1)
                                            @if($encuesta->pregunta_1 == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="respuesta2">¿Como calificaria al empleado?
                                        <p id="respuesta2">
                                            @if($encontrado === 1)
                                                {{$encuesta->pregunta_2}}
                                            @endif
                                        </p>
                                   </label>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="respuesta3">¿Como calificaria su respuesta?
                                        <p id="respuesta3">
                                            @if($encontrado === 1)
                                                {{$encuesta->pregunta_3}}
                                            @endif
                                        </p>
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

