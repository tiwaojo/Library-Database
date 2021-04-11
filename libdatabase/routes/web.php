<?php

use App\Http\Controllers\AuthController;
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
// Route::get('/signin', [PagesController::class,'signin']);
// Route::get('/signup',  [PagesController::class,'signup']);





Route::resource('book', bookController::class);
Route::resource('employees', employeesController::class);
Route::resource('genre', genreController::class);
Route::resource('library', libController::class);
Route::resource('author', authorsController::class);
// Route::resource('signin', LoginController::class);
// Route::resource('signup', SignUpController::class);
// thor', authorsController::class);
Route::get('LogIn',[AuthController::class,'LogIn']);
Route::get('Register',[AuthController::class,'Register']);
Route::post('Create', [AuthController::class,'Create'])->name('auth.create');
Route::post('Authenticate', [AuthController::class,'Authenticate'])->name('auth.authenticate');


