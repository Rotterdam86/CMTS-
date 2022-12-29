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

Route::get('/', [
    'as'   => 'root_path', // nom de la route
    'uses' => 'PagesController@home' // utilisation de la route
    ]);

// tracer de la route pays
Route::get('/portail', [
    'as'   => 'portail_path', // nom de la route
    'uses' => 'PagesController@portail'
]);
