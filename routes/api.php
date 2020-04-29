<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::resource('categorias','CategoriaController');

Route::group(['middleware' => ['jwt.auth'], 'prefix' => 'v1'], function(){
	Route::post('/auth/refresh','TokensController@refreshToken');
	Route::post('/auth/expire','TokensController@expireToken');
	//Route::resource('categorias','CategoriaController');
});

Route::group(['middleware' => [], 'prefix' => 'v1'], function(){
	Route::post('/auth/login','TokensController@login');
	
});*/

//Route::resource('categorias','CategoriaController');

Route::resource('categorias','CategoriaController')->middleware('jwt.auth');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    //Route::resource('categorias','CategoriaController');

});