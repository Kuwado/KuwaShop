<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CartController extends Controller {
    // Thêm hàng vào giỏ
    public function addProduct(Request $request) {
        $product_id = $request->input('product-detail-id');
        $quanId = $request->input('product-detail-quan');
        $size = $request->input('product-detail-size');
        $quantity = $request->input('product-detail-quantity');
        $cartKey = $quanId . '_' . $size;
        if (is_null(Session::get('cart'))) {
            Session::put('cart', [
                $cartKey => $quantity
            ]);
        } else {
            $cart = Session::get('cart');
            if (Arr::exists($cart, $cartKey)) {
                $cart[$cartKey] += $quantity;
            } else {
                $cart[$cartKey] = $quantity;
            }
            Session::put('cart', $cart);
        }
        return redirect() -> back();
    }

}
