<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
      // 1つのパスポートは1人の市民に属する
    public function citizen() {
        return $this->belongsTo(Citizen::class);
    }
}
