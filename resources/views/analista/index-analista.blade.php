@include('layouts.app')

    <div id="wrapper">

        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-ticket fa-fw"></i> Ver graficos</a>
                        </li>
                        <!-- Crear ticket-->
                         <li>
                            <a href="#"><i class="fa fa-plus-square fa-fw"></i>Filtrar por fecha</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Seccion Analista - Nombre analista</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <!--primer grafico-->
                        <div id="estados" ></div>
                    </div>
                    <div class="col-md-4">
                        <!--Segundo grafico-->
                        <div id="finalizados-noFinalizados" ></div>
                    </div>
                </div>  
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!--Libreria para graficos de torta-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--Importando graficos de torta-->
    <script type="text/javascript" src="{{ asset('js/graficos.js') }}"></script>