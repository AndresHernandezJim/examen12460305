@extends('templates.sitio')
@section('content')
   <center>
    <div class="container l6 div-index z-depth-4">
    <center>
        <div class="row">
            <div class="col s12">
             <h2 class="center-align">Ingresar</h2>
                @if(Session::has('error'))
                            <p class="error">Usuario no encontrado</p>
                @endif
                       
                <form id="form" method="POST" action="/logeo">
                {{ csrf_field() }}
                    <div class="input-field col s12">
                        <input id="usuario" type="text" class="validate" name="usuario">
                        <label id="texto" for="usuario"><i class="fa fa-user"></i> Usuario o Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="pass" type="password" class="validate" name="password">
                        <label id="texto" for="contra"><i class="fa fa-key"></i>  Contraseña</label>
                    </div><br>
                    <div class="divider"></div><br>
                    <div class="row">
                        <div class="col s12">
                            <p class="center-align">
                             <button type="submit" class="btn btn-large waves-effect waves-light" type="button" name="action">ingresar &nbsp<i class="fa fa-arrow-right"></i></button>
                             </p> 
                    </button>
                </form>
            </div>
        </div>
    </center>
</div>    
</center>
@stop