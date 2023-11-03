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
Route::get('/film/{id}', [ReadyToWatchController::class, 'show'])->name('film.show');
Route::get('/category/{id}/film', [FilmController::class, 'show'])->name('category.show');


//Route::get('/', [HomeController::class, 'index'])->name('home.index');
//Route::get('/film', [ReadyToWatchController::class, 'show'])->name('movie-details');
//Route::get('/film/{id}', [ReadyToWatchController::class, 'show'])->name('movie-details');
//Route::get('/category/{id}/film', [CategoryController::class, 'filmByCategory'])->name('anime.index');

//main MainController::main
//film/ FilmController::index *?year_from=1995&year_to=2003 ?category_id=1
//film/2 FilmController::show

