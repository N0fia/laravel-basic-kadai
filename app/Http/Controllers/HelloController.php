<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class HelloController extends Controller
{
    //
     public function index() {
        $name = '侍 太郎';
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];

        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));
    }
}
