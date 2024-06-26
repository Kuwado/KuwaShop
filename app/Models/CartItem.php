<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể gán hàng loạt.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cart_id',
        'quan_id',
        'quantity',
        'size'
    ];

    /**
     * Mối quan hệ với Cart.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Mối quan hệ với Quan.
     */
    public function quan()
    {
        return $this->belongsTo(Quan::class);
    }
}
