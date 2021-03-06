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
                            <a href="{{url('empleado/indexFinalizado')}}"><i class="fa fa-check" aria-hidden="true"></i> Tickets finalizados</a>
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
                    <h3>Tickets Asignados</h3>
                    <hr>
                    <table class="table table-hover table-striped" id="tableTicketsAsignados">
                        <thead class="thead-inverse">
                            <tr>
                                <th class="hidden-xs">ID</th>
                                <th>Titulo</th>
                                <th>Estado</th>
                                <th>Prioridad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                            <tr data-titulo="{{$ticket->titulo}}" 
                                data-estado="{{$ticket->  id_estado}}" 
                                data-sla="{{$ticket->id_sla}}"
                                data-cliente="{{$ticket->cliente->nombre}}"
                                data-responsable=@if($ticket->responsable)"{{$ticket->responsable->nombre}}" @else "" @endif
                                data-fechacreacion="{{$ticket->created_at}}"
                                data-fechavencimiento="{{$ticket->fecha_vencimiento}}"
                                data-fechacierre="{{$ticket->fecha_cierre}}">
                                <td class="hidden-xs">{{ $ticket->id }}</td>
                                <td>{{ $ticket->titulo }}</td>
                                <td> 
                                    @if($ticket->id_estado === 1)
                                        <p><span class="label label-default">Creado</span></p>
                                    @elseif($ticket->id_estado === 2)
                                        <p><span class="label label-primary">Asignado</span></p>
                                    @elseif($ticket->id_estado === 3)
                                        <p><span class="label label-success">Finalizado</span></p>
                                    @endif
                                </td>
                                <td>
                                    @if($ticket->sla->criticidad === 'baja')
                                        <p><span class="label label-success">Baja</span></p>
                                    @elseif($ticket->sla->criticidad === 'media')
                                        <p><span class="label label-warning">Media</span></p>
                                    @elseif($ticket->sla->criticidad === 'alta')
                                        <p><span class="label label-danger">Alta</span></p>
                                    @endif
                                </td>
                               <td>
                                    <!--Btn ver mas-->
                                    <a href="#" class="btn btn-primary link-color btnVerMas" ><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="Ver mas informacion" ></i></a> 
                                    <!--Btn Editar-->
                                    <a href="{{route('empleado.empleado.show', $ticket->id)}}" class="btn btn-warning link-color hidden-xs " data-toggle="tooltip" title="Panel de informacion"><i class="fa fa-ticket" aria-hidden="true"></i> </a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
                <!-- Fin table -->
            </div>                    
        </div>                        
    </div>          
    <!--MODAL VER INFO USUARIO-->
    <div class="modal fade" id="modal-ticket" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalTicket"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="col-md-6">
                                    <div class="form-group" id="infoTicket">
                                       <span class="cliente" id="nameCliente"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <span>Nivel de prioridad:</span><br />
                                        <span class="label label-success typeSlaSpan" id="slaBaja">Baja</span>
                                        <span class="label label-warning typeSlaSpan" id="slaMedia">Media</span>
                                        <span class="label label-danger typeSlaSpan" id="slaAlta">Alta</span> <br />


                                        <span>Estado del ticket:</span><br />
                                        <span class="label label-default typeEstadoSpan" id="ticketCreado">Creado</span>
                                        <span class="label label-primary typeEstadoSpan" id="ticketAsignado">Asignado</span>
                                        <span class="label label-success typeEstadoSpan" id="ticketFinalizado">Finalizado</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                      
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
   
    <!--/.MODAL VER INFO USUARIO-->

