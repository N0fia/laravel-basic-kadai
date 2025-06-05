<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。
| これらのルートはRouteServiceProviderによって読み込まれ、すべてが
| 「web」ミドルウェアグループに割り当てられます。素晴らしいものを作りましょう！
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show']);
//Route::get('/products', [ProductController::class, 'index']);
//Route::get('/products/create', [ProductController::class, 'create']);

//Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
//Route::get('/products/{id}', [ProductController::class, 'show']);
//Route::get('/vendors/create', [VendorController::class, 'create']);

//Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

//Route::get('/vendors/{id}', [VendorController::class, 'show']);

//Route::get('/requests/create', [RequestController::class, 'create']);

//Route::post('/requests/confirm', [RequestController::class, 'confirm'])->name('requests.confirm');

//Route::get('/responses', [ResponseController::class, 'index']);

