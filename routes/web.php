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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
//_____________________________________//

Route::get('/productos', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/category/{id?}', 'ProductController@index');


//_____________________________________//

Route::get('/faqs', function () {
    return view('faqs');
});
//_____________________________________//

Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::get('/history', function () {
    return view('history');
});
//_____________________________________//

Route::get('/agregarProductos', 'ProductController@create');

Route::post('/agregarProductos', 'ProductController@store');
