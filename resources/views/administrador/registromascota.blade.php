@extends('templates/administrador')

@section('tpagina')
        <title>Mascotas</title>
@stop

@section('content')

<div class="center">

<div>
  <h3>Registrar mascota</h3>
</div>

  <div class="row">

    <form class="col s12" method="post" action="/registromascotas">
    {{ csrf_field() }}
     
        <div class="row">
          <div class="input-field col s6 push-s3">
            <input name="nombre" id="nombre" type="text" class="validate">
            <label class="active" for="nombre">Nombre</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <input name="edad" id="edad" type="text" class="validate">
            <label class="active" for="edad">Edad</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <input name="tipo" id="tipo" type="text" class="validate">
            <label class="active" for="tipo">Tipo</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <input name="color" id="color" type="text" class="validate">
            <label class="active" for="color">Color</label>
          </div>

        </div>
        
        <div class="row">
            <a href="/administrador/panel" class="btn waves-effect purple darken-3">Regresar</a>
            <button id="btn-registrar" class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registrar</button>
          </div>
    </form>
  </div>
  
</div>        
<div class="center">
  <h5>Mascotas registradas</h5>
  <?php foreach ($mascotas as $mascota): ?>
    <a href="/detalledemascota/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
      <br>
  <?php endforeach ?>
</div>


@stop