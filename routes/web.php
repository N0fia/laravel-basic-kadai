<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

//Route::get('/posts', [HelloController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
