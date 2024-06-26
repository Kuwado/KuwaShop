<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * Mối quan hệ với Sub.
     */
    public function subs() {
        return $this->hasMany(Sub::class);
    }
}
