@extends('store.templatelogin')
@section('content')
<div class="container text-center">
        
        <div class="row">

            <div class="col-md-offset-4 col-md-4">
                <h1><i class="fa fa-user"></i> Crear cuenta</h1>

                <div class="well bs-component">
                    @include('store.partials.errors')


                    <form method="POST" action="{{route('register-get')}}">
                        {!! csrf_field() !!}

                        <div class="form-group">                            
                            <input type="text" name="name" placeholder="* Nombre(s)" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">                            
                            <input type="text" name="last_name" placeholder="* Apellidos" value="{{ old('last_name') }}">
                        </div>
                        <div class="form-group">                            
                            <input type="email" name="email"  placeholder="* Correo electrónico" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">                            
                            <input type="text" name="user"  placeholder="* Nombre de Usuario" value="{{ old('user') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="* Contraseña">
                        </div>                
                        <div class="form-group">
                            <input type="password" name="password_confirmation" placeholder="* Vuelve a escribir tu contraseña">
                        </div>
                        <div class="form-group">                            
                            <input type="text" name="address"  placeholder="* Dirección" value="{{ old('address') }}">
                        </div>
                                <br>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">CREAR CUENTA</button>
                        </div>
                    </form>
                </div>

                </div>


</div>
@stop