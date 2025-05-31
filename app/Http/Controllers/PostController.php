<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    public function index($id) {
        // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        $posts = Post::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        //return view('products.show', compact('product'));
        return view('Posts.show', compact('posts'));
    }
}
