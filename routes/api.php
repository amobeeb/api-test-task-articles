<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


//Route::prefix('v1')->group(function(){
    Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
    Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
    Route::get('/articles/{id}/comment', [\App\Http\Controllers\ArticleController::class, 'comment']);
    Route::get('/articles/{article}/like', [\App\Http\Controllers\ArticleController::class, 'like']);
    Route::get('/articles/{article}/view', [\App\Http\Controllers\ArticleController::class, 'view']);
//});
