<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
        // 1人の母親は複数の子供を持てる
    public function children() {
        return $this->hasMany(Child::class);
    }
}
