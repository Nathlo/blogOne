<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// list all posts
Route::get('/post', [PostController::class, 'index'])->name('post.index');
// show a specified post
Route::get('/post/{id}', [PostController::class, 'show'])->where(['id'=>'[0-9]+'])->name('post.show');
// routes with required authentication
Route::middleware('auth')->group(function () {
    // routes to create and store posts
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    // route to create comments
    // Route::get('/post/{id}/comments', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/post/{id}', [CommentController::class, 'store'])->name('comments.store');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
