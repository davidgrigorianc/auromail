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
Route::get('/', 'HomeController@index') 
    ->name('home');
Route::get('/home', 'HomeController@index') 
    ->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');  

Route::get('/admin', 'AdminController@dashboard')    
    ->middleware('is_admin')    
    ->name('admin');
Route::post('/subcribe', 'SubscribeController@subscribe')    
->name('subscribe');
Route::get('/testmail', 'AdminController@testMail');