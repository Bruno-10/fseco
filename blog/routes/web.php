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

use App\Producto;

Route::get("/", 'ProductoController@pagPrincipal');

Route::get("/contacto", "GeneralController@index");
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

route::get('/admin', 'AdminController@index');

route::get('/productos-admin', 'AdminController@productos');
route::post('/productos-admin', 'AdminController@agregarProducto');

route::get('/modificar/{id}', 'AdminController@formularioModificarProducto');

route::post('/procesar-modificar', 'AdminController@modificarProducto');


route::get('/productos-admin/agregar', 'AdminController@mostrarAgregar');

route::get('/productos-admin/eliminar/{id}', 'AdminController@eliminarProducto');

route::get('/clientes-admin', 'AdminController@clientes');

route::get('/clientes-admin/eliminar/{id}', 'AdminController@clientesEliminar');

route::get('/producto', 'ProductoController@listado');

route::get('/producto/{categoria}', 'ProductoController@filtroCategorias');

route::get('/usuario' , 'UsuarioController@index');

route::get('/detalle' , 'ProductoController@detalle');

route::post('/carrito', 'ProductoController@agregar');

route::get('/carrito', 'ProductoController@eliminar');

route::get('/carrito', function(){
     return view('usuario.carrito');
});

route::get('/carrito/{id}', 'ProductoController@eliminar');

route::get('/usuarioCarrito', 'UsuarioController@mostrar');

route::get('/caja', 'ProductoController@caja');

route::post('/compraExitosa', 'ProductoController@checkout');

