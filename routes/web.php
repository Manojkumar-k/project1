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


Route::get('/log', function () {
    return view('login');
});
Route::get('/reg', function () {
    return view('register');
});
Route::get('/forg', function () {
    return view('forgot');
})->name('forgot');

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users');
// Authenticate the user
Route::post('/auth','FirebaseController@index');


Route::get('/product','ProductController@index');
