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
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Realizar encuesta de sactifaccion
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    {!! Form::open(['route' => 'cliente.encuesta.store', 'method' => 'POST']) !!}
                                        <div class="form-group">
                                            {!! Form::label('pregunta_1', '¿Le sirvió la respuesta? ') !!}
                                            {!! Form::select('pregunta_1', 
                                                [   '1' => 'Si', 
                                                    '0' => 'No'
                                                ], 
                                                    null,  ['class' => 'form-control' ])
                                            !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('pregunta_2', '¿Como calificaria al empleado? Siendo 10 Excelente y 1 Muy malo ') !!}
                                            {!! Form::select('pregunta_2', 
                                                [   '10' => '10',
                                                    '9' => '9',
                                                    '8' => '8',
                                                    '7' => '7',
                                                    '6' => '6',
                                                    '5' => '5',
                                                    '4' => '4',
                                                    '3' => '3',
                                                    '2' => '2',
                                                    '1' => '1'
                                                ], 
                                                    null,  ['class' => 'form-control' ])
                                            !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('pregunta_3', '¿Como calificaria su respuesta? Siendo 10 Perfecta y 1 Muy mala ') !!}
                                            {!! Form::select('pregunta_3', 
                                                [   '10' => '10',
                                                    '9' => '9',
                                                    '8' => '8',
                                                    '7' => '7',
                                                    '6' => '6',
                                                    '5' => '5',
                                                    '4' => '4',
                                                    '3' => '3',
                                                    '2' => '2',
                                                    '1' => '1'
                                                ], 
                                                    null,  ['class' => 'form-control' ])
                                            !!}
                                        </div>
                                        <div class="form-group pull-right">
                                            {!! Form::submit('Enviar', ['class' => 'btn btn-primary ']) !!}
                                        </div>
                                    {!! Form::close() !!}    
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