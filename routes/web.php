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
    return view('welcome');
});

/*
 * steps
 *
 * composer require laravel/passport
 * php artisan migrate
 * php artisan passport:install
 * php artisan passport:client --client
 * Client ID: 3
    Client secret: WDSzVq7x4vjVfl7dk5QG0uX66vrWfYE0q9SmzRf6

add to route middleware group


 */
