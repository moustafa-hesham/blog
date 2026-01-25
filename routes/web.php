<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');
// 1- define new route, so user can access it through browser
// 2- controller, that render view
// 3- define view that containts lists of posts
// 4- remove any static HTML data from the view

// --- Data Base
// 1- Structure change: create table, edit column, remove column
// 2- Operations in database: insert record, edit record, delete record