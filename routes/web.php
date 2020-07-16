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
    return view('index');
});
Route::get('/categoria', function () {
    return view('categoria');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/carrito', function () {
    return view('carrito');
});
Route::get('/pago', function () {
    return view('pago');
});
Route::get('/boleta', function () {
    return view('boleta');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/agregar', function () {
    return view('agregar');
});

Route::get('/otro', function () {
    return view('otro');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/detalle', function () {
    return view('detalle');
});
Route::get('/busqueda', function () {
    return view('busqueda');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->middleware('can:manage-users')
->group(function()
{
    Route::resource('/productos', 'ProductosController')->except(['create']);
    Route::get('/productos/create/{categoriaID}', 'ProductosController@create')->name('productos.create');
    Route::resource('/categorias', 'CategoriasController')->except(['create', 'store', 'destroy', 'update', 'show', 'edit']);
    Route::resource('/detalles', 'DetalleProductosController');
    Route::get('/detalles/create/{productoID}', 'DetalleProductosController@create')->name('detalles.create');
});


Route::get('/agregar-al-carrito/{id}', [
    'uses' => 'ProductosController@getAddToCart',
    'as' => 'productos.addToCart'
]);

/*FILTRADO por categoria*/

Route::get('/{categoria}','Filter\FilterController@categoria')->name('categoria');
Route::get('/{categoria}/info/{id}','ProductosController@info');
Route::get('/size/stock','ProductosController@cantidad');
Route::get('/filtro/subfiltroTipo','Filter\FilterController@subfiltro1');
Route::get('/filtro/subfiltroGenero','Filter\FilterController@subfiltro2');
Route::get('/filtro/subfiltroColor','Filter\FilterController@subfiltro3');
Route::get('/filtro/subfiltroTalla','Filter\FilterController@subfiltro4');
Route::get('/filtro/subfiltroOrden','Filter\FilterController@subfiltro5');


/*Busquedas*/
Route::post('/busqueda','ProductosController@busqueda')->name('busqueda');

Route::get('/busquedas/subfiltroTipo','ProductosController@subfiltro1');
Route::get('/busquedas/subfiltroGenero','ProductosController@subfiltro2');
Route::get('/busquedas/subfiltroColor','ProductosController@subfiltro3');
Route::get('/busquedas/subfiltroTalla','ProductosController@subfiltro4');
Route::get('/busquedas/subfiltroOrden','ProductosController@subfiltro5');

Route::get('/genero/{genero}','ProductosController@genero')->name('genero');
