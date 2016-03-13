
@extends('store.templatelogin')
@section('content')
<div class="container text-center">
        
        <div class="row">
                    <br>

            <div class="col-md-offset-4 col-md-4">
                <h1><i class="fa fa-user"></i>Crear cuenta</h1>

                <div class="well bs-component">
                    @include('store.partials.errors')


                    <form method="POST" action="{{route('register-get')}}">
                        {!! csrf_field() !!}

                        <div class="form-group">                            
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="* Nombre completo">
                        </div>
                        <div class="form-group">                            
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="* Correo electrónico">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="* Contraseña">
                        </div>                
                        <div class="form-group">
                            <input type="password" name="password_confirmation" placeholder="* Vuelve a escribir tu contraseña">
                        </div>
                        <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">CREAR</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</div>
@stop