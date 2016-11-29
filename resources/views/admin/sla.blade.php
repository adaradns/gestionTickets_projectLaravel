@include('layouts.app')
    <div id="wrapper">

            <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--Listar usuarios-->
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
                                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-block ']) !!}
                                </div>
                             {!! Form::close() !!}                    
                        </div>
                        <div class="panel-footer">
                            &copy Gestion de tickets
                        </div>
                    </div>
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
                <div class="modal-header header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="gridSystemModalLabel">Informacion empleado Leonardo</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-group">
                                  <p>Nombre: Leonardo</p>
                                  <div class="form-group">
                                  <label for="selTipoUsuario">Tipo de usuario:</label>
                                  <select class="form-control" name="selTipoUsuario" id="selTipoUsuario">
                                      <option value="Empleado de 1° Linea">Empleado de 1° Linea</option>
                                      <option value="Empleado de 2° Linea">Empleado de 2° Linea</option>
                                      <option value="Analista">Analista</option>
                                  </select>
                                  </div>
                                  <p>E-mail: leogonzales@gmail.com</p>
                                  <p>Nombre de usuario: leogon</p>
                                  <p>Fecha de nacimiento: 10/11/1980</p>
                                  <div class="modal-footer">
                                      <div class="col-sm-12">
                                        <input type="submit" value="Enviar" name="enviar" id="btnEnviar"  class="btn btn-primary"/>
                                      </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--/.MODAL VER INFO USUARIO-->
