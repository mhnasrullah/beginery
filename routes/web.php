<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\homeController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\userController;
use App\Http\Controllers\serviceController;

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
Route::get('/s/{id}',[homeController::class,'eventService']);
Route::get('/event/{title}',[homeController::class,'detailTitle']);
Route::get('/event/join/{title}',[homeController::class,'join']);

Route::get('/auth',[userController::class,'auth']);
Route::post('/auth/reg',[userController::class,'reg']);
Route::post('/auth/log',[userController::class,'log']);
Route::get('/auth/out',[userController::class,'out']);

Route::middleware(IsAdmin::class)->group(function () {

    
    Route::prefix('/a')->group(function(){
        
        Route::redirect('dashboard', 'event');

        Route::prefix('event')->group(function(){
            $controller = eventController::class;
            Route::get('/',[$controller,'index']);
            Route::post('/',[$controller,'store']);
            Route::get('e/{id}',[$controller,'edit']);
            Route::post('u/{id}',[$controller,'update']);
            Route::get('d/{id}',[$controller,'destroy']);
        });
        
        Route::prefix('service')->group(function(){
            $controller = serviceController::class;
            Route::get('/',[$controller,'index']);
            Route::post('/',[$controller,'store']);
            Route::get('e/{id}',[$controller,'edit']);
            Route::post('u/{id}',[$controller,'update']);
            Route::get('d/{id}',[$controller,'destroy']);
        });

    });

});