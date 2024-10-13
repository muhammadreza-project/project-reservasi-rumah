<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RumahController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RumahController::class, 'index']);

Auth::routes();

Route::get('/home', [RumahController::class, 'index']);

Route::middleware('admin')->group(function () {
    Route::resource('rumah.index', RumahController::class);
});

Route::resource('rumah', RumahController::class);
