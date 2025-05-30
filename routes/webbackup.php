<?php
use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\PostController;
 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts' , [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');