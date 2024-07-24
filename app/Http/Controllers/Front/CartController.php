<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Quan;
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
        $cart = Session::get('cart', []);
        $total = 0;
        $total_origin = 0;
        return view('front.cart.detail', [
            'cart' => $cart,
            'total' => $total,
            'total_origin' => $total_origin
        ]);
    }

    public function updateCart(Request $request) {
        $cart = Session::get('cart', []);
        $quantity = $request->input('quantity');  // Changed to match the data key
        $key = $request->input('key');  // Changed to use input method
    
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
    
    public function deleteProduct(Request $request) {
        $cart = Session::get('cart', []);
        $key = $request->key;
        unset($cart[$key]);
        Session::put('cart', $cart);
        return redirect('/cart');
    }

    public function orderCart(Request $request) {
        $cart = Session::get('cart', []);
        $total_origin = 0;
        $total = 0;
        $number = count($cart);
        foreach ($cart as $key => $quantity) {
            list($quanId, $size) = explode('_', $key);
            $quan = Quan::find($quanId);
            $product = $quan->product;
            $price = $product->discount_price ?? $product->original_price;
            $price *= $quantity;
            $origin = $product->original_price;
            $origin *= $quantity;
            $total_origin += $origin;
            $total += $price;
        }
        return view('front.cart.order', [
            'number' => $number,
            'total' => $total,
            'total_origin' => $total_origin
        ]);
    }

}
