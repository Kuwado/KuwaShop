<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
    use HasFactory;

    /**
     * Mối quan hệ với Product.
     */
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
