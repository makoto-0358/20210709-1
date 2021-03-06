<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/food', [HelloController::class, 'food']);
Route::get('/food/{id?}', [HelloController::class, 'id']);
Route::get('/food/{id?}/detail', [HelloController::class, 'detail']);
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