@if(Auth::check())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	    <i class="fa fa-user"></i>{{Auth::user()->user}}<span class="caret"></span></a>
	    <ul class="dropdown-menu" role="menu">
	    	<li><a href="{{route('logout')}}">Finalizar sesión</a></li>
	    </ul>
	</li>
@else
<!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><i class="fa fa-user"></i></b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">												
								@include('store.partials.errors')
								<h1><i class="fa fa-user"></i>Iniciar sesión</h1>

								<form method="POST" action="{{route('login')}}">
								    {!! csrf_field() !!}

								    <div class="form-group">
								        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
								    </div>

								    <div class="form-group">
								        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
								    </div>

								    <div class="form-group">
								        <input type="checkbox" name="remember"> Guardar mi dirección
								    </div>

								    <div class="form-group">
								        <button class="btn btn-primary btn-block" type="submit">INICIAR SECIÓN AHORA</button>
								    </div>
								</form>

							</div>
							<div class="bottom text-center">
								<a href="#"><b>¿Has olvidado la contraseña?</b></a>
							</div>

							 <div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    <a href="#" class="btn btn-gp gp-linkedin"><i class="fa fa-google-plus"></i> Google+</a>
                                    <a href="#" class="btn btn-linkedin gp-linkedin"><i class="fa fa-linkedin-square"></i> LinkedIn</a>
							</div> 

					 </div>
				</li>-->
	<li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	    <i class="fa fa-user"></i><span class="caret"></span></a>
	    <ul class="dropdown-menu" role="menu">
	    <li><a href="{{route('login')}}">Iniciar sesión</a></li>
	   	<li><a href="{{route('register-get')}}">Crear cuenta</a></li>
	    </ul>
	</li> 
@endif