<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    /**
     * Mối quan hệ với Mini.
     */
    public function minis() {
        return $this->hasMany(Mini::class);
    }

    /**
     * Mối quan hệ với Type.
     */
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
