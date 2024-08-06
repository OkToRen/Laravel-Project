<?php

use App\Http\Controllers\AdminController;
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

Route::get('/home',[PageController::class, 'index']);

Route::get('/register', [PageController::class, 'register']);

Route::get('/signin', [PageController::class, 'signin']);

Route::prefix('/admin')->group(function() {
    Route::prefix('/publisher')->group(function() {
        Route::get('/manage-publisher', [AdminController::class, 'adminManagePublisher'])->name('amp');
        Route::get('/add-publisher', [AdminController::class, 'adminAddPublisher'])->name('aap');
        Route::get('/manage-wallet-code', [AdminController::class, 'adminManageWalletCode'])->name('amwc');
        Route::get('/manage-genre', [AdminController::class, 'adminGenre'])->name('amg');
    });
});

// POST

Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');

// DELETE
