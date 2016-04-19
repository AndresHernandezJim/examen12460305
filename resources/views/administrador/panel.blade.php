@extends('templates/administrador')
@section('tpagina')
	 <title>Bienvenido {{session()->get('administrador')->nombre}}</title>
@stop
@section('content')
<div class="center">
	<h1>Panel de administrador</h1>
</div>

<div> <br><br><br><br><br><br></div>
<div class="center">
	@if(Session::has('mensaje'))
              <center><p class="mensaje">Mascota registrada correctamente</p></center>
    @endif
	<a href="/registromascota" class="btn waves-effect waves-light">Registrar mascotas</a>
	<a href="/logout" class="btn waves-effect red accent-4" >Salir</a>
</div>
<div><br><br><br><br><br><br><br></div>
@stop