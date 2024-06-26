<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mini extends Model
{
    use HasFactory;

    /**
     * Mối quan hệ với Sub.
     */
    public function sub() {
        return $this->belongsTo(Sub::class);
    }
}
