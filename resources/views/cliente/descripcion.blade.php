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
                    
                    <!-- Panel principal -->
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <i class="fa fa-ticket fa-fw"></i>Ticket
                        </div>
                        <div class="panel-body">
                            <div class="buttons">
                                <button class="btn btn-primary">
                                    <a id="link-historial" href="#">Ver historial</a>
                                </button>
                                <button class="btn btn-primary">
                                    <a  href="{{url('cliente/encuesta')}}">Realizar encuesta</a>
                                </button>
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
                                                        @if($ticket->id_problema === 1)
                                                            <p><span>Consulta</span></p>
                                                        @elseif($ticket->id_problema === 2)
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
                                    <h2>Ticket: {{$ticket->titulo}}</h2>
                                    <hr>
                                    <h3>Motivo del ticket:</h3>
                                    @if($ticket->id_problema === 1)
                                        <h3>Consulta</h3>
                                    @elseif($ticket->id_problema === 2)
                                        <h3>Problema</h3>
                                    @endif
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
                </div>
            <!-- /.panel-body -->
               <!--
                <div class="col-lg-4">
                    
                  Panel principal 
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <i class="fa fa-ticket fa-fw"></i>Tickets - Detalles
                        </div>
                        <div class="panel-body">
                            <div class="content-details">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p><b>ID:</b> 788978</p>
                                    </div>    
                                    <div class="col-xs-12">
                                        <p><b>Prioridad:</b> Baja</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <p><b>Estado: </b>Finalizado</p>    
                                    </div>    
                                    <div class="col-xs-12">
                                        <p><b>Fecha de creacion:</b> 20/03/16</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <p><b>Fecha de vencimiento: </b> 25/03/16</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <p><b>Fecha de cierre: </b> 28/03/16</p>
                                        
                                    </div>
                                    <div class="col-xs-12">
                                        <p><b>Cliente: </b>Jorgee</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <p><b>Empleado asignado: </b>Pepe</p>
                                    </div>                
                            </div>          
                        </div>      
                    </div>
                </div>  
            </div>-->
                
        </div>
        <!-- /#page-wrapper -->
        
                
    </div>
    <!-- /#wrapper -->

    <!--MODALS-->
    <div class="modal fade" id="modal-encuesta" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Encuesta de sactifaccion</h4>
              </div>
              <div class="modal-body">
                   <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">¿Le sirvió la respuesta?</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">No
                                    </label>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="">¿Como calificaria al empleado?
                                        <select id="selMotivo" name="selMotivo" class="form-control" required>
                                            <option value="1">1 Muy malo</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 Perfecto</option>
                                       </select>
                                   </label>
                                </div>
                                <div class="col-md-12" style="display: inline">
                                    <label for="">¿Como calificaria su respuesta?
                                        <select id="selMotivo" name="selMotivo" class="form-control" required>
                                            <option value="1">1 Muy malo</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 Perfecto</option>
                                       </select>
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