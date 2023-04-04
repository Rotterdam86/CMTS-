<?php

use App\Mail\ContactMessageCreated;
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
// tracer de la route d'accueil
Route::get('/', [
    'as'   => 'root_path', // nom de la route
    'uses' => 'PagesController@home' // utilisation de la route
    ]);

// tracer de la route portail
Route::get('/portail', [
    'as'   => 'portail_path', // nom de la route
    'uses' => 'PagesController@portail'
]);

// tracer de la route contact avec la méthode get
Route::get('/contact', [
    'as'   => 'contact_path', // nom de la route
    'uses' => 'ContactController@create'
]);

// tracer de la route contact avec la méthode post
Route::post('/contact', [
    'as'   => 'contact_path', // nom de la route
    'uses' => 'ContactController@store'
]);

// tracer de la route test-email
Route::get('/test-email', function(){
    return new ContactMessageCreated('YAO','BEUGRE ARMAND CHRISTIAN','christcelo@gmail.com','Je vous remercie pour tout !');
} );

