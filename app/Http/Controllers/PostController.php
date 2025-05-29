<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // postsテーブルからすべてのデータを取得して変数$postsへ代入
        $posts = DB::table('posts')->get();

        // 変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }      
}
