<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JumbotronController;
use Illuminate\Support\Facades\Route;

Route::GET('/', [IndexController::class, 'index'])->name('index');

Route::GET('/jumbotron', [JumbotronController::class, 'index'])->name('index.jumbotron');
Route::POST('/jumbotron', [JumbotronController::class, 'store'])->name('post.jumbotron');

Route::get('/jumbotron/{id}/edit', [JumbotronController::class, 'edit'])->name('jumbotron.edit');
Route::PUT('/jumbotron/{id}', [JumbotronController::class, 'update'])->name('update.jumbotron');

Route::DELETE('/jumbotron/{id}', [JumbotronController::class, 'destroy'])->name('delete.jumbotron');