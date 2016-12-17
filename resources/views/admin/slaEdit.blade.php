@include('layouts.app')
    <div id="wrapper">
        <!-- Menu items-->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--Listar usuarios-->
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-ticket fa-fw"></i> 
                            Listar usuarios
                        </a>
                    </li>
                    <!-- Crear ticket-->
                    <li>
                        <a href="{{ url('admin/users/create') }}">
                            <i class="fa fa-plus-square fa-fw"></i>
                            Crear usuario
                        </a>
                    </li>
                    <!--SLA-->
                    <li>
                        <a href="{{url('admin/sla')}}">
                            <i class="fa fa-ticket fa-fw"></i>
                            SLA
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Panel principal -->
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <i class="fa fa-user fa-fw"></i>SLA
                        </div>
                        <div class="panel-body" >
                            <h4>Cantidad de dias para los tickets segun su criticidad</h4>
                            <hr>
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
                            {!! Form::open(['route' => ['admin.sla.update', $sla], 'method' => 'PUT']) !!}
                                <div class="form-group col-md-6">
                                    {!! Form::label('dias', 'Cantidad de dias') !!}
                                    {!! Form::number('dias', $sla->dias, ['class' => 'form-control', 'placeholder' => 'Ingrese cantidad de dias'])!!}<br />
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('criticidad', 'Criticidad') !!}
                                    {!! Form::select('criticidad', [ 'baja' => 'Baja', 'media' => 'Media', 'alta' => 'Alta'], $sla->criticidad,  ['class' => 'form-control' ])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary btn-block ']) !!}
                                </div>
                            {!! Form::close() !!}
                                     
                        </div>
                        <div class="panel-footer">
                            &copy Gestion de tickets
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
