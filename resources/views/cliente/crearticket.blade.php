@include('layouts.app')


           <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('cliente.ticket.index') }}"><i class="fa fa-ticket fa-fw"></i> Listar tickets</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="{{ url('cliente/ticket/create') }}"><i class="fa fa-plus-square fa-fw"></i>Crear ticket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Crear ticket
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--Validacion, verifico si hay errores-->
                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {!! Form::open(['route' => 'cliente.ticket.store', 'method' => 'POST', 'files' => true]) !!}
                                        <div class="form-group">
                                            {!! Form::label('titulo', 'Titulo') !!}
                                            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un titulo', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('descripcion', 'Descripcion') !!}
                                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripcion', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('id_sla', 'Prioridad') !!}
                                            {!! Form::select('id_sla', [ '1' => 'Baja', '2' => 'Media', '3' => 'Alta'], null,  ['class' => 'form-control' ])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('id_problema', 'Tipo de problema') !!}
                                            {!! Form::select('id_problema', [ '1' => 'Problema', '2' => 'Consulta'], null,  ['class' => 'form-control' ])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('archivo', 'Imagen') !!}
                                            {!! Form::file('archivo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una imagen'])!!}
                                        </div>

                                        <div class="form-group pull-right">
                                            {!! Form::submit('Registrar', ['class' => 'btn btn-primary ']) !!}
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

