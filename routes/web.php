<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

// GET

Route::get('/',[PageController::class, 'index']);

Route::get('/register', [PageController::class, 'register']);

Route::get('/signin', [PageController::class, 'signin']);

// POST

Route::post('registerUser', [UserController::class, 'registerUser'])->name('registerUser');



// DELETE