<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // taskに対してなので複数形
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
