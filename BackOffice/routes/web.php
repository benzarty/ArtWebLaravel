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

Route::post("AddVelo", [VeloController::class,'AddVelo']);
Route::put("EditVelo/{id}", [VeloController::class,'EditVelo']);
Route::get("AllVelo", [VeloController::class,'getAllVelos']);
Route::delete("destroyVelo/{id}",[VeloController::class,'destroyVelo']);
//CRUD Event
//Route::post("AddEvent", [EventController::class,'AddEvent']);
//Route::put("EditEvent/{id}", [EventController::class,'EditEvent']);
//Route::get("getAllEvents", [EventController::class,'getAllEvents']);
//Route::delete("destroyEvent/{id}",[EventController::class,'destroyEvent']);
Route::resource('event',EventController::class);
Route::resource('velos',VeloController::class);
Route::resource('bloc',BlocController::class);


Route::resource("/association",AssociationController::class);
