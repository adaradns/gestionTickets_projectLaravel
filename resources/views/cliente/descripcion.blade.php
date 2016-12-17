@include('layouts.app')
        <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--Listar tickets-->
                        <li>
                            <a href="{{ route('cliente.ticket.index')}}"><i class="fa fa-ticket fa-fw"></i> Listar tickets</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="{{ route('cliente.ticket.create')}}"><i class="fa fa-plus-square fa-fw"></i>Crear ticket</a>
                        </li>
                        <!--Desplegable tickets-->
                    </ul>
                </div>
            </div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                            <h2>Ticket: {{$ticket->titulo}}</h2>
                                    <hr>
                            <div class="buttons">
                                <button class="btn btn-primary">
                                    <a href="{{route('empleado.historial.show', $ticket->id)}}"> <i class="fa fa-history fa-fw"></i>Ver historial</a>
                                </button>
                                @if($ticket->archivo != NULL)
                                    <button class="btn btn-grey"><a id="imagenDelProblema" href="#">Ver imagen del problema</a></button>
                                @endif
                                @if($ticket->id_estado === 3 and $encontrado === 0)
                                    <button class="btn btn-primary">
                                        <a  href="{{url('cliente/encuesta' , $ticket->id)}}"><i class="fa fa-question-circle" aria-hidden="true"></i> Realizar encuesta</a>
                                    </button>
                                @elseif($ticket->id_estado === 3 and $encontrado === 1)
                                    <button class="btn btn-grey"><a id="encuestaDeSastifaccion" href="#">Ver resultado de encuesta de sastifaccion</a></button>
                                @endif
                            </div>
                           <div style="display: none;" class="historial">
                           <br />
                                  <table class="table table-bordered table-hover table-striped">
                                            <thead >
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Titulo</th>
                                                    <th>Motivo</th>
                                                    <th>Responsable</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$ticket->created_at}}</td>
                                                    <td>{{$ticket->titulo}}</td>
                                                    <td>
                                                        @if($ticket->id_problema == 1)
                                                            <p><span>Consulta</span></p>
                                                        @elseif($ticket->id_problema == 2)
                                                            <p><span>Problema</span></p>
                                                        @endif
                                                    </td>
                                                    <td>{{$ticket->id_responsable}}</td>
                                                </tr>  
                                            </tbody>
                                        </table>
                           </div>
                           <!--CONTENIDO -->
                            <hr>
                            <div class="content">
                                <article>
                                    
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
                            @if($ticket->id_estado != 3)
                                {!! Form::open(['route' => 'cliente.mensajes.store', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        {!! Form::text('descripcion', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ingrese su mensaje aqui...', 'required']) !!}

                                        <span class="input-group-btn">
                                            {!! Form::submit('Send', ['class' => 'btn btn-warning btn-sm']) !!}
                                        </span>
                                    </div>
                                    {!! Form::hidden('ticket_id', $ticket->id) !!}
                                    {!! Form::hidden('id_usuario', $ticket->id_cliente) !!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                            </div>        
                </div>
        </div>
        <!-- /#page-wrapper -->
        
                
    </div>
    <!-- /#wrapper -->
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

    <!--MODAL VER IMAGEN DEL PROBLEMA-->
    <div class="modal fade" id="modal-imagenDelProblema" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Imagen del problema</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if($ticket->archivo != NULL)
                                <img src="{{ url('/archivo/' . $ticket->nombre_archivo) }}" class="img-responsive">
                            @endif
                        </div>
                    </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
   
    <!--/.MODAL VER IMAGEN DEL PROBLEMA-->