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

Route::get('/', function () {
    return view('layouts.main');
});
/*Route::get('/inventario', function () {
    return view('layouts.inventario');
});
Route::get('/usuarios', function () {
    return view('layouts.usuarios');
});*/
Route::get('/usuarios','UsuariosController@index');
Route::group(['prefix'=>'admin','as'=>'admin'], function(){
  Route::get('/','AdminController@index');
//  Route::post('/usuarios','UsuariosController@store');
  Route::resource('usuarios','UsuariosController');
  Route::resource('inventario','InventarioController');
});
Route::get('/inventario','InventarioController@index');
