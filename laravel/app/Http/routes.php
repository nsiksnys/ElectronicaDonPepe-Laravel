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

//Index
Route::get('/','IndexController@index');
Route::get('/index', 'IndexController@index');

//Productos
Route::get('/producto', 'ProductoController@index');
Route::get('/producto/', 'ProductoController@index');
Route::get('/producto/index', 'ProductoController@index');

//Venta
/*Route::get('/venta/alta', 'VentaController@Alta');
Route::get('/venta/consulta', 'VentaController@Consulta');
Route::get('/venta/consulta/detalle', 'VentaController@Detalle');

//Usuarios
Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/error', function () {
    return view('error');
});

//Admin
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adicional/reporte', function () {
    return view('adicionalReporte');
});

Route::get('/adicional/modificar', function () {
    return view('adicionalModificar');
});

Route::get('/adicional/campania', function () {
    return view('campaniaAdministrar');
});*/

//TODO: Agregar las vistas a las que se agregan por POST