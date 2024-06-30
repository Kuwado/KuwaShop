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
    public function addProduct(Request $request) {
        $quanId = $request->input('product-detail-quan');
        $size = $request->input('product-detail-size');
        $quantity = $request->input('product-detail-quantity');
        $cartKey = $quanId . '_' . $size;
    
        // Lấy giỏ hàng hiện tại từ session, nếu không có thì tạo mảng rỗng
        $cart = Session::get('cart', []);
    
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
        if (Arr::exists($cart, $cartKey)) {
            // Cập nhật số lượng sản phẩm hiện tại
            $cart[$cartKey] += $quantity;
    
            // Lưu sản phẩm lên đầu giỏ hàng
            $updatedCart = [$cartKey => $cart[$cartKey]] + Arr::except($cart, [$cartKey]);
        } else {
            // Thêm sản phẩm mới vào đầu giỏ hàng
            $updatedCart = [$cartKey => $quantity] + $cart;
        }
    
        // Lưu giỏ hàng cập nhật vào session
        Session::put('cart', $updatedCart);
    
        return response()->json([
            'success' => true, 
            'message' => 'Product added to cart successfully.'
        ]);
    }


    public function updateCart(Request $request) {
        $cart = Session::get('cart', []);
        $quantity = $request->input('cart-preview-input');
        $key = $request->key;
        $cart[$key] = $quantity;
        Session::put('cart', $cart); // Save the updated cart back into session
    
        return redirect()->back();
    }
    
    


}
