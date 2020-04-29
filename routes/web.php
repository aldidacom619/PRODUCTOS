<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola/{nombre}', function($nombre){
	return "hola comoe stam ".$nombre;
});

Route::get('/contacto/{nombre?}/{edad?}', function($nombre = "",$edad = 45){
	//return view('contacto');
	return view('contacto', array(
					"nombre" => $nombre,
					"edad" => $edad
				));
})->where([
	'nombre' => '[A-Za-z]+',
	'edad' => '[0-9]+'
	]);

//RUTAS CONTROLADORES GET POST PUT DELETE 

Route::get('/inicio','InicioController@index');
Route::get('/productos','ProductoControler@listar')->name('listar_productos');
Route::get('/productos/crear','ProductoControler@crear')->name('crear_productos');
Route::post('/productos','ProductoControler@guardar')->name('guardar_productos');
Route::get('/productos/{id}/editar','ProductoControler@editar')->name('editar_productos');
Route::put('/productos/{id}','ProductoControler@modificar')->name('modificar_productos');
Route::delete('productos/{id}','ProductoControler@eliminar')->name('eliminar_productos');

Route::resource('/categorias','CategoriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
