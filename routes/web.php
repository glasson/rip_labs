<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListOfMedicaments;
use App\Http\Controllers\CreateMedicament;
use App\Http\Controllers\DeleteMedicament;
use App\Http\Controllers\UpdateMedicament;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/list', [ListOfMedicaments::class, 'list']);
Route::get('/create', [CreateMedicament::class, 'create']);
Route::get('/delete/{id}', [DeleteMedicament::class, 'delete']);
Route::get('/update/{id}', [UpdateMedicament::class, 'update']);
Route::get('/', [UpdateMedicament::class, 'test']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
