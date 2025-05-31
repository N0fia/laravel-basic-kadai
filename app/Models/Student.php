<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    // 1人の学生は複数の講座を受講できる
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}