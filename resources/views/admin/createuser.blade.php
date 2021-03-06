@include('layouts.app')


           <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('admin.users.index') }}"><i class="fa fa-ticket fa-fw"></i> Listar usuarios</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="{{ url('admin/users/create') }}"><i class="fa fa-plus-square fa-fw"></i>Crear usuario</a>
                        </li>
                        <!--SLA-->
                        <li>
                            <a href="{{url('admin/sla')}}"><i class="fa fa-ticket fa-fw"></i>SLA</a>
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
                            Dar de alta usuario
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
                                    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
                                        <div class="form-group">
                                            {!! Form::label('email', 'E-mail') !!}
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese email', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('nombre', 'Nombre') !!}
                                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('apellido', 'Apellido') !!}
                                            {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese apellido', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('nombre_usuario', 'Nombre de usuario') !!}
                                            {!! Form::text('nombre_usuario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de usuario', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('id_tipo', 'Tipo de empleado') !!}
                                            {!! Form::select('id_tipo', [ '3' => 'Empleado', '4' => 'Analista'], null,  ['class' => 'form-control' ])!!}
                                        </div>
                                        <div class="form-group pull-right">
                                            {!! Form::submit('Registrar', ['class' => 'btn btn-primary ', 'id' => 'btnCrearUser']) !!}
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

