<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JumbotronController;
use Illuminate\Support\Facades\Route;

Route::GET('/', [IndexController::class, 'index'])->name('index');


Route::GET('/event', [EventController::class, 'index'])->name('index.event');
Route::GET('/event/create', [EventController::class, 'create'])->name('create.event');
Route::POST('/event', [EventController::class, 'store'])->name('post.event');

Route::GET('/jumbotron', [JumbotronController::class, 'index'])->name('index.jumbotron');
Route::GET('/jumbotron/create', [JumbotronController::class, 'create'])->name('create.jumbotron');
Route::POST('/jumbotron', [JumbotronController::class, 'store'])->name('post.jumbotron');
Route::GET('/jumbotron/{id}/edit', [JumbotronController::class, 'edit'])->name('edit.jumbotron');
Route::PUT('/jumbotron/{id}', [JumbotronController::class, 'update'])->name('update.jumbotron');

Route::GET('/cities', [CityController::class, 'index'])->name('index.city');
Route::GET('/cities/create', [CityController::class, 'create'])->name('create.city');
Route::POST('/cities', [CityController::class, 'store'])->name('store.city');
Route::GET('/cities/{id}/edit', [CityController::class, 'edit'])->name('edit.city');
Route::PUT('/cities/{id}', [CityController::class, 'update'])->name('update.city');