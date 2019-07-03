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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//_____________________________________//

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/productos', function () {
    return view('productos');
});

//_____________________________________//

Route::get('/agregarProductos', function(){
  return view('agregarProductos');
});
Route::post('/agregarProductos', 'ProductoController@store');
