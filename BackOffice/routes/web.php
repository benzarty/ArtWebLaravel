<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/byccle', function () {
//     return view('byccle');
// });
Route::get('/booking', function () {
    return view('booking');
});
Route::resource('velos',VeloController::class);
Route::resource('accessoires',AccessoireController::class);
Route::get('byccle',[\App\Http\Controllers\VeloController::class ,'index2']);

