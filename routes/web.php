<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('main.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/users', \App\Http\Controllers\UserPostController::class);
Route::post('/users/store', [\App\Http\Controllers\UserPostController::class, 'store']);

Route::get('/post_view', [\App\Http\Controllers\PostImageComment::class, 'index']);
Route::post('/post_save', [\App\Http\Controllers\PostImageComment::class, 'post_save']);
Route::post('/image_save', [\App\Http\Controllers\PostImageComment::class, 'image_save']);
Route::post('/comment_save', [\App\Http\Controllers\PostImageComment::class, 'comment_save']);

Route::get('/some', fn() => 'Hello World');
Route::get('/some_1', fn() => 'Hello World');

require __DIR__.'/auth.php';
