<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\input;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Vendor;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    //
        public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $products = DB::table('products')->get();

        // 変数$productsをproducts/index.blade.phpファイルに渡す
        return view('products.index', compact('products'));
    }    

        public function show($id) {
        // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        $product = Product::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        //return view('products.show', compact('product'));
        return view('products.show', compact('products'));
    }

    public function create() {
        $vendor_codes = Vendor::pluck('vendor_code');
        return view('products.create', compact('vendor_codes'));
    }
    public function store(ProductStoreRequest $request) {
        //$product = new Product();
        //$product->product_name = $request-> input('product_name');
        //$product->price = $request->input('price');
        //$product->vendor_code = $request->input('vendor_code');
        //$product->save();

        // リダイレクトさせる
        //return redirect("/products/{$product->id}");
    }
}
