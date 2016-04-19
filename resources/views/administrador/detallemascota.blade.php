@extends('templates.administrador')

@section('tpagina')
        <title><?=$mascotas['nombre']?> </title>
@stop

@section('content')
<div class="center">
	<h4>Detalles de <?=$mascotas['nombre']?></h4>
	<p>
		
		Edad: <?=$mascotas['edad']?>
		<br>
		Tipo: <?=$mascotas['tipo']?>
		<br>
		Color: <?=$mascotas['color']?>
	</p>
	<a href="/registromascota" class="btn waves-effect purple darken-3">Regresar</a>
</div>
	
@stop