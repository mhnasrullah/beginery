<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\userController;

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

Route::get('/',[homeController::class,'index']);
Route::get('/event/{title}',[homeController::class,'detailTitle']);
Route::get('/auth',[userController::class,'auth']);
Route::post('/auth/reg',[userController::class,'reg']);
Route::post('/auth/log',[userController::class,'log']);


Route::get('/a/event',[eventController::class,'index']);
Route::post('/a/event',[eventController::class,'store']);
Route::get('/a/event/e/{id}',[eventController::class,'edit']);
Route::post('/a/event/u/{id}',[eventController::class,'update']);
Route::get('/a/event/d/{id}',[eventController::class,'destroy']);


