@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                   <p> Hola <b> {{ Auth::user()->nombre }} </b> por favor presiona el boton <b>Comenezar</b>para acceder al sistema de tickets online.</p>

                   <a href="" class="btn btn-danger btn-block">Comenzar</a>
                    
                </div>
                <div class="panel-footer">
                    Hosting-AR &copy;  {{ date('Y')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
