<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\AssociationController;

use App\Http\Controllers\AccessoireController;
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

// Route::get('/', [\App\Http\Controllers\MainController::class , 'index'] );

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/byccle', function () {
//     return view('byccle');
// });
Route::get('/booking', function () {
    return view('booking');
});
Route::resource('velos',VeloController::class);
Route::resource('accessoires',AccessoireController::class);
Route::get('byccle',[\App\Http\Controllers\VeloController::class ,'index2']);

Route::resource('event',EventController::class);

Route::resource('bloc',BlocController::class);


Route::resource("/association",AssociationController::class);
// Route::post('/upload',VeloController::class, 'storeImage')->name('image.store');
Route::controller(VeloController::class)->group(function(){
     Route::get('/image-upload', 'index3')->name('image.form');
    Route::post('/upload-image', 'storeImage')->name('image.store');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */

Route::get('/', function () {
    return view('welcome');
});
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
