<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;

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
//CRUD operations velo
// Route::post("AddVelo", [VeloController::class,'AddVelo']);
// Route::put("EditVelo/{id}", [VeloController::class,'EditVelo']);
// Route::get("AllVelo", [VeloController::class,'getAllVelos']);
// Route::delete("destroyVelo/{id}",[VeloController::class,'destroyVelo']);
Route::resource('velos',VeloController::class);

