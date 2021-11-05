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

/* Home */

/* User */
Route::get('/menuuser', 'MenuController@index')->name('menuuser');
Route::get('/', 'LandingController@index')-> name('landing');




/* Admmin*/
Route::get('/admin','HomeController@index')->name('admin');
Route::get('/konten','KontenController@index')->name('konten');
Route::get('/data','DataController@index')->name('datastatis');
route::get('/login','LoginController@index')->name('login');
route::get('/forgot','LoginController@forgot')->name('forgot');
route::get('/reset','LoginController@reset')->name('reset');
route::get('/register','RegisterController@index')->name('register');



  

