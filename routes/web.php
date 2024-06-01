<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function (\Illuminate\Http\Request $request) {

    $ref = new ReflectionClass(\App\Http\Controllers\ControllerWithAttr::class);


    foreach ($ref->getMethods() as $method) {
        foreach ($method->getAttributes() as $attr) {
            $name_space = $attr->getName();
            $name_arr = explode('\\', $name_space);
            $method_name = $name_arr[count($name_arr) - 1];
            $attr = $attr->newInstance();

            precho(Route::class."::".strtolower($method_name));


//            call_user_func(Route::class."::".strtolower($method_name), [
//                '/', function () {
//                }
//            ]);


        }
    }

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

require __DIR__.'/auth.php';
