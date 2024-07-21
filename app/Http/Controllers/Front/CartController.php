<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CartController extends Controller {
    // Thêm hàng vào giỏ
    public function addProductToPreviewCart(Request $request) {
        $quanId = $request->input('product-detail-quan');
        $size = $request->input('product-detail-size');
        $quantity = $request->input('product-detail-quantity');
        $cartKey = $quanId . '_' . $size;
    
        $cart = Session::get('cart', []);
        if (Arr::exists($cart, $cartKey)) {
            if ($cart[$cartKey] + $quantity > 10) {
                $cart[$cartKey] = 10;
            } else {
                $cart[$cartKey] += $quantity;
            }
            $updatedCart = [$cartKey => $cart[$cartKey]] + Arr::except($cart, [$cartKey]);
        } else {
            $updatedCart = [$cartKey => $quantity] + $cart;
        }
        Session::put('cart', $updatedCart);
    
        return response()->json([
            'success' => true, 
            'message' => 'Sản phẩm đã được thêm vào giỏ hàng'
        ]);
    }


    public function updatePreviewCart(Request $request) {
        $cart = Session::get('cart', []);
        $quantity = $request->input('cart-preview-input');
        $key = $request->key;
        if ($quantity == 0) {
            unset($cart[$key]);
        } else {
            $cart[$key] = $quantity;
        }
        Session::put('cart', $cart);
    
        return response()->json([
            'success' => true, 
            'message' => 'Sản phẩm đã được cập nhật số lượng'
        ]);
    }
    
    public function showCart() {
        return view('front.cart.detail');
    }
    


}
