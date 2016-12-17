@include('layouts.app')
    <div id="wrapper">
            <!-- Menu items-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <!--Listar tickets-->
                        <li>
                            <a href="{{ route('cliente.ticket.index')}}"><i class="fa fa-ticket fa-fw"></i> Listar tickets</a>
                        </li>
                       
                        
                    </ul>
                </div>
            </div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$historial->fecha}}</h1>
                </div>
            </div>
            <!-- fin row -->
            <div class="row">
                <div class="col-lg-12">
                    <h4></h4>
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
                            @foreach($historial as $row)
                            <tr>
                                <td>$row->id</td>
                                <td>$row->fecha</td>
                                <td>c</td>
                                <td>d</td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $historial->render() !!}
                    </div>  	
				</div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
        </div>
        <!-- fin wrapper -->

