<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('vendor_code')->nullable();
            // vendor_codeカラムに外部キー制約を付与する（参照先はvendorsテーブルのvendor_codeカラムにする）
            $table->foreign('vendor_code')->references('vendor_code')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products', function (Blueprint $table) {
        // ロールバック時にvendor_codeカラムの外部キー制約を削除する
        $table->dropForeign(['vendor_code']);
        // ロールバック時にvendor_codeカラムを削除する
        $table->dropColumn('vendor_code');
        });
    }
};
