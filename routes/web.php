<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){
	//Roles
	//name(...) es nombre de la ruta
	//permission: ... es el permiso para la ruta
	//permission debe estar en Http\Kernel
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	//para ACTUALIZAR debes tener permiso para abrir el formulario de editar
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');
	//para EDITAR debes tener permiso para abrir el formulario de editar
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');


	//Productos
	Route::resource('products', 'ProductController');

	//Categorias
	Route::resource('categories', 'CategoryController');	

	//Categorias
	Route::resource('lotes', 'LoteController');

	//Usuarios
	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	//Proveedores
	Route::resource('providers', 'ProviderController');

	//Documents
	Route::resource('documents', 'DocumentTypeController');

	//Ingresos
	Route::resource('purchases', 'PurchaseController');

	//Almacén
	Route::resource('store', 'StockController');
});