@extends('store.templatelogin')
@section('content')
	<div class="container text-center">
		
		<div class="row">
					<br>

			<div class="col-md-offset-2 col-md-4">
				<h1><i class="fa fa-user"></i>Iniciar sesión</h1>

				<div class="well bs-component">
					@include('store.partials.errors')

					<form method="POST" action="{{route('login')}}">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="* DIRECCIÓN DE CORREO ELECTRÓNICO">
					    </div>

					    <div class="form-group">
					        <input class="form-control" type="password" name="password" id="password" placeholder="* CONTRASEÑA">
					    </div>

					    <div class="form-group">
					        <input type="checkbox" name="remember"> Guardar mi dirección
					    </div>

					    <div class="form-group">
					        <button class="btn btn-primary btn-block" type="submit">INICIAR SESIÓN AHORA</button>
					    </div>
					    <div class="bottom text-center">
								<a href="#"><b>¿Has olvidado la contraseña?</b></a>
						</div>
					</form>

				</div>
			</div>

			<div class="col-md col-md-4">
				
				<h1>Registrarme</h1>
				<p>Crear una cuenta es fácil. Introduce tu dirección de correo electrónico, diligencia el formulario de la página siguiente y disfruta de los beneficios de tener una cuenta.</p>
				
				<h2>Con tu cuenta podrás:</h2>
				<p>
				    Finalizar tus pedidos más rápido
				    Consultar tu historial de pedidos
				    Añadir o modificar tus preferencias de correo electrónico
				</p>

				  <a href="{{route('register-get')}}" class="btn btn-success" role="button">Crear cuenta</a>

			</div>
		</div>
			<br>
	</div>

@stop

