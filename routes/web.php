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

//_______HOME________//
Route::get('/home', 'HomeController@index')->name('home');

//_______PROFILE________//
Route::get('/', 'ProductController@indexHome');
Route::get('/home/{id}', 'PerfilController@login');
Route::post('/home', 'PerfilController@update');

//_____PRODUCTS________//
Route::get('/products/{id?}', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/searchProduct', 'ProductController@search');



//_____FAQs______//
Route::get('/FAQs', function () {
    return view('FAQs');
});

//______CART_______//
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::post('/cartClose', 'CartController@cartClose')->middleware('auth');
Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');

//______ADM_______//
Route::get('/adm', function () {
 return view('adm');
});
Route::get('/addProduct', 'ProductController@create')->middleware(['auth','admin']);
Route::post('/addProduct', 'ProductController@store')->middleware(['auth','admin']);

//_____MODIFICAR PRODUCTOS______//
Route::get('/editProduct/{id}', 'ProductController@edit')->middleware(['auth','admin']);
Route::post('/editProduct', 'ProductController@update')->middleware(['auth','admin']);

//_____BORRAR_____//
Route::post('/editProduct/{id}', 'ProductController@destroy')->middleware(['auth','admin']);
