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

/*Route::get('/venta/alta', function () {
    return view('ventaNueva');
});

Route::get('/venta/consulta', function () {
    return view('ventaConsulta');
});

Route::get('/venta/consulta/detalle', function () {
    return view('ventaDetalle');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/error', function () {
    return view('error');
});

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