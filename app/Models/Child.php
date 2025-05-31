<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model {
    // 1人の子供は1人の母親に属する
    public function mother() {
        return $this->belongsTo(Mother::class);
    }
}