<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'category'], function(){
    Route::get('/all', [CategoryController::class, 'all']);
    Route::post('/store', [CategoryController::class, 'store']);
    Route::get('{id}/edit', [CategoryController::class, 'edit']);
    Route::put('{id}/update', [CategoryController::class, 'update']);
    Route::delete('{id}/destroy', [CategoryController::class, 'destroy']);
});

Route::group(['prefix' => 'post'], function(){
    Route::get('/all', [PostController::class, 'all']);
    Route::post('/store', [PostController::class, 'store']);
    Route::get('{id}/edit', [PostController::class, 'edit']);
    Route::put('{id}/update', [PostController::class, 'update']);
    Route::delete('{id}/destroy', [PostController::class, 'destroy']);
});
