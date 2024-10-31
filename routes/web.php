<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BoardGameController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
Route::get('/boardgame/create/', [GameController::class, 'create'])->name('boardgame.create');
Route::post('/boardgame/library', [GameController::class, 'library'])->name('boardgame.library');


Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create')->middleware('auth');
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');

Route::get('/author/index', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/detail/{author}', [AuthorController::class, 'show'])->name('author.show');

Route::get('/author/edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/author/update/{author}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/author/delete/{author}', [AuthorController::class,'destroy'])->name('author.destroy');
Route::get('/profile',[PublicController::class,'profile'])->middleware('auth')->name('profile');
