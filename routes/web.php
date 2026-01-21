<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostsController::class, 'index']);

// 1- define new route, so user can access it through browser
// 2- controller, that render view
// 3- define view that containts lists of posts
// 4- remove any static HTML data from the view