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

Route::name('home')->get('/', function () {
    return view('pages/welcome');
});


/*
Route::get('/about-us', function() {
    return view('pages.about');
}) -> name('about');
*/

/*EQUIVALENT en php sous la fonction fn()*/
/*
Route::get('/about-us', fn() => view('pages.about'))->name('about');
*/

/*EQUIVALENT EN LARAVEL*/
Route::view('/about-us','pages/about')->name('about');


Route::get('/help', function() {

    return view('pages/help');
});