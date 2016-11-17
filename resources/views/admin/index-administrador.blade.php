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
                        <!--Listar usuarios-->
                        <li>
                            <a href="#"><i class="fa fa-ticket fa-fw"></i> Listar usuarios</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="{{ route('admin.users.create') }}"><i class="fa fa-plus-square fa-fw"></i>Crear usuario</a>
                        </li>
                        <li>
                            <a href="sla.html"><i class="fa fa-ticket fa-fw"></i>SLA</a>
                        </li>
                        <!--Desplegable tipo de usuario-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Tipo de usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><input type="checkbox">Empleado</li>
                                <li><input type="checkbox">Analista</li>
                                <li><input type="checkbox">Cliente</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                        
                        <h3>Listado de usuarios</h3>
                        <hr>

                            @include('flash::message')

                                      <table class="table table-hover table-striped" id="tableAdmin" >
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th class="hidden-xs">ID</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Tipo de usuario</th>
                                                    <th class="th-ver-mas">Opciones</th>
                                                    <th class="th-habilitar hidden-xs">Habilitar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                    <tr 
                                                        data-nombre="{{$user->nombre}}" data-apellido="{{$user->apellido}}" data-email="{{$user->email}}" data-nombreusuario="{{$user->nombre_usuario}}" 
                                                        data-tipousaurio="{{$user->id_tipo}}">
                                                        <td class="hidden-xs">{{ $user->id }}</td>
                                                        <td>{{ $user->nombre }}</td>
                                                        <td>{{ $user->apellido }}</td>
                                                        <td> 
                                                            @if($user->id_tipo === 1)
                                                                <p><span class="label label-success">Administrador</span></p>
                                                            @elseif($user->id_tipo === 2)
                                                                <p><span class="label label-warning">Cliente</span></p>
                                                            @elseif($user->id_tipo === 3)
                                                                <p><span class="label label-danger">Empleado</span></p>
                                                            @elseif($user->id_tipo === 4)
                                                                <p><span class="label label-info">Analista</span></p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <!--Btn ver mas-->
                                                            <a href="#" class="btn btn-primary link-color btnVerMas" ><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                                            <!--Btn Editar-->
                                                            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning link-color hidden-xs " ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class=" hidden-xs"><input type="checkbox"></td>
                                                    </tr>
                                                @endforeach                                           
                                            </tbody>
                                        </table>
                                    <!-- Fin table -->
                            
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
               
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!--MODAL VER INFO USUARIO-->
    <div class="modal fade" id="modal-users" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="col-md-6">
                                    <div class="form-group" id="infoUser">
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <span>Tipo de usuario</span><br />
                                        <span class="label label-success typeUserSpan" id="typeAdmin">Administrador</span>
                                        <span class="label label-warning typeUserSpan" id="typeCliente">Cliente</span>
                                        <span class="label label-danger typeUserSpan" id="typeEmpleado">Empleado</span>
                                        <span class="label label-info typeUserSpan" id="typeAnalista">Analista</span>
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
