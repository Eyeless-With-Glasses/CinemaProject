<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadyToWatchController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [FilmController::class, 'index']);
//Route::get('/', [CategoryController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/movie-details/{id}', [ReadyToWatchController::class, 'show'])->name('movie-details');
Route::get('/anime', [FilmController::class, 'index'])->name('anime.index');


//Route::get('/', [HomeController::class, 'index'])->name('home.index');
//Route::get('/film/{id}', [ReadyToWatchController::class, 'show'])->name('movie-details');
//Route::get('/category/{id}/film', [CategoryController::class, 'filmByCategory'])->name('anime.index');
