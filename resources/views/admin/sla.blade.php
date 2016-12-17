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
                            {!! Form::open(['route' => 'admin.sla.store', 'method' => 'POST']) !!}
                                <div class="form-group col-md-6">
                                    {!! Form::label('dias', 'Cantidad de dias') !!}
                                    {!! Form::number('dias', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cantidad de dias'])!!}<br />
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('criticidad', 'Criticidad') !!}
                                    {!! Form::select('criticidad', [ 'baja' => 'Baja', 'media' => 'Media', 'alta' => 'Alta'], null,  ['class' => 'form-control' ])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::submit('Registar', ['class' => 'btn btn-primary btn-block ']) !!}
                                </div>
                            {!! Form::close() !!}
                            <div class="col-md-12">
                                 @include('flash::message')
                                <table class="table" >
                                        <thead>
                                        <tr>
                                            <th class="hidden-xs">ID</th>
                                            <th>Fecha</th>
                                            <th>Nivel de criticidad</th>
                                            <th>Cantidad de dias</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sla as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->created_at}}</td>
                                                <td>
                                                @if($row->criticidad === 'baja')
                                                    <p><span class="label label-success">Baja</span></p>
                                                @elseif($row->criticidad === 'media')
                                                    <p><span class="label label-warning">Media</span></p>
                                                @elseif($row->criticidad === 'alta')
                                                    <p><span class="label label-danger">Alta</span></p>
                                                @endif
                                                </td>
                                                <td>{{$row->dias}}  Dias</td>
                                                <td>
                                                    <a href="{{route('admin.sla.edit', $row->id)}}" class="btn btn-warning link-color hidden-xs " >
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {!! $sla->render() !!}
                                </div>
                            </div>                    
                        </div>
                        <div class="panel-footer">
                            &copy Gestion de tickets
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
