<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    // 1つの講座は複数の学生に受講される
    public function students() {
        return $this->belongsToMany(Student::class);
    }
}