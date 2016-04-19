@extends('templates.sitio')
@section('content')
    <div class="center"><a href="/">regresar</a></div>
	<div class="container">
        <div class="row">
        
            <div class="col m5">
           
             <div class="row">
                <form class="col s12" action="/controller" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label>Nombre</label>
                        </div>
                    </div>
                   <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name='email'class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password">
                            <label for="pass">Password</label>
                        </div>
                    </div>                 
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="col m12">
                                <a href="/" class="waves-effect waves-light btn-large">Regresar</a>
                                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Registrame &nbsp<i class="fa fa-arrow-right"></i>
 	 							</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop