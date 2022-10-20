<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/registration', [MyController::class,'registration']);
Route::post('/registration_store', [MyController::class,'registration_store'])->name('registration_store');

Route::get('/com_registration', [MyController::class,'com_registration']);
Route::post('/com_registration_store', [MyController::class,'com_registration_store'])->name('com_registration_store');
