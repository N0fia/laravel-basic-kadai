<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    // 1人の市民は1つのパスポートを持つ
    public function passport() {
        return $this->hasOne(Passport::class);
    }
}
