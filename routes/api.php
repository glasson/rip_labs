<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAPI;
use App\Http\Controllers\ApiMessagesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api','namespace' => 'App\Http\Controllers','prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::group(['middleware' => 'auth:api'], function(){
        // все роуты здесь будут отображаться только для авторизованных 
    });
});

Route::post("/registration", [RegisterAPI::class, 'registration']);
Route::get('/messages', [ApiMessagesController::class, 'getMessages']);