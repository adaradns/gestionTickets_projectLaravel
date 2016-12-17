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
                    <h1 class="page-header">Historial</h1>
                </div>
            </div>
            <!-- fin row -->
            <div class="row">
                <div class="col-lg-12">
                    <h4>Ticket</h4>
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
                                <td>a</td>
                                <td>b</td>
                                <td>c</td>
                                <td>d</td>
                            </tr> 
                        </tbody>
                    </table>  	
				</div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
        </div>
        <!-- fin wrapper -->

