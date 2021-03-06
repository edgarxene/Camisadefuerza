<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Inyeccion de dependencias para obtener el slug
Route::bind('product', function($slug)
{
	return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
	]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
	]);


//Carrito ---------------
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
	]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
	]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
	]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
	]);

Route::get('cart/update/{product}/{quantity}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
	]);





// Authentication routes...
Route::get('inicio-de-sesion', [
	'as' => 'login',
	'uses' => 'Auth\AuthController@getLogin'
	]);

Route::post('inicio-de-sesion', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
	]);

Route::get('fin-de-sesion', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
	]);

// Registration routes...
Route::get('nuevo-registro', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
	]);

Route::post('nuevo-registro', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
	]);

/*

// Authentication routes...
//Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);*/

