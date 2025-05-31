<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{

        public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts  = DB::table('posts')->get();

        // 変数$productsをproducts/index.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }
        public function show($id) {
        // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        $posts  = Post::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        //return view('products.show', compact('product'));
        return view('posts.show', compact('posts'));
    }
}
