@include('layouts.app')
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
                        <li>
                            <a href="{{ route('admin.users.index') }}"><i class="fa fa-ticket fa-fw"></i> Listar usuarios</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="{{ url('admin/users/create') }}"><i class="fa fa-plus-square fa-fw"></i>Crear usuario</a>
                        </li>
                        <!--SLA-->
                        <li>
                            <a href="sla.html"><i class="fa fa-ticket fa-fw"></i>SLA</a>
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
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edicion del usuario {{ $user->nombre }} {{$user->apellido}}
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            {!! Form::label('email', 'E-mail') !!}
                                            {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'Ingrese email', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('nombre', 'Nombre') !!}
                                            {!! Form::text('nombre', $user->nombre , ['class' => 'form-control', 'placeholder' => 'Ingrese nombre', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('apellido', 'Apellido') !!}
                                            {!! Form::text('apellido', $user->apellido , ['class' => 'form-control', 'placeholder' => 'Ingrese apellido', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('nombre_usuario', 'Nombre de usuario') !!}
                                            {!! Form::text('nombre_usuario', $user->nombre_usuario, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de usuario', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('id_tipo', 'Tipo de empleado') !!}
                                            {!! Form::select('id_tipo', [ '3' => 'Empleado', '4' => 'Analista'], null,  ['class' => 'form-control' ])!!}
                                        </div>
                                        <div class="form-group pull-right">
                                            {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary ']) !!}
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

