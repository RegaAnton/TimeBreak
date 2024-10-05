<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JumbotronController;
use Illuminate\Support\Facades\Route;

Route::GET('/', [IndexController::class, 'index'])->name('index');

Route::GET('/jumbotron', [JumbotronController::class, 'index'])->name('index.jumbotron');
Route::POST('/jumbotron', [JumbotronController::class, 'store'])->name('post.jumbotron');

Route::DELETE('/jumbotron/{slug}', [JumbotronController::class, 'destroy'])->name('delete.jumbotron');