<?php

use App\Http\Controllers\ValidateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ValidateController::class,'index'])->name('index');

Route::post('/store',[ValidateController::class,'store'])->name('store.form');
