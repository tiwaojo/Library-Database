<?php

use App\Http\Controllers\authorController;
use App\Http\Controllers\authorsController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\libController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class,'home']);

// Route::get('/book', [bookController::class,'index']);
// Route::get('/employees', [employeesController::class,'index']);

// Route::get('/genre', [genreController::class,'index']);
// Route::get('/library', [libController::class,'index']);
// Route::get('/author', [authorsController::class,'index']);

Route::resource('book', bookController::class);
Route::resource('employees', employeesController::class);
Route::resource('genre', genreController::class);
Route::resource('library', libController::class);
Route::resource('author', authorsController::class);

