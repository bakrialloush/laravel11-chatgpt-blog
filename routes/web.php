<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::resource('authors', AuthorController::class);
Route::resource('posts', PostController::class);
