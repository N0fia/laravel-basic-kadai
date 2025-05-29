<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $products = DB::table('posts')->get();

        // 変数$productsをproducts/index.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }
}
