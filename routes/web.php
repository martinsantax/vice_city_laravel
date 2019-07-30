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

//__________________HOME_______________________//
Route::get('/home', 'HomeController@index')->name('home');

//__________________PROFILE_____________________//
Route::get('/', function () {
    return view('welcome');
});

//________________PRODUCTS_____________________//
Route::get('/productos/{category_id}', 'ProductController@index');
Route::get('/productos', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');

//________________FAQs___________________//
Route::get('/faqs', function () {
    return view('faqs');
});

//_________________CART__________________//
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::post('/cartClose', 'CartController@cartClose')->middleware('auth');
Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');

//_________________ADM__________________//
Route::get('/adm', function () {
  return view('adm');
});
Route::get('/addProduct', 'ProductController@create')->middleware(['auth','admin']);
Route::post('addProduct', 'ProductController@store')->middleware(['auth','admin']);
