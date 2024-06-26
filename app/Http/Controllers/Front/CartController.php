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
        return response()->json([
            'success' => true, 
            'message' => 'Product added to cart successfully.'
        ]);
    }

    public function preview()
    {
        // Lấy thông tin giỏ hàng từ Session
        $cart = Session::get('cart', []);
        $total = 0;
        $cartItems = [];

        // Lặp qua từng sản phẩm trong giỏ hàng để lấy thông tin chi tiết
        foreach ($cart as $cartKey => $quantity) {
            list($productDetailId, $size) = explode('_', $cartKey);
            $quan = DB::table('quans')->where('id', $productDetailId)->first();
            $product = DB::table('products')->where('id', $quan->product_id)->first();
            $images = explode('*', $quan->images);
            $price = $product->discount_price ?? $product->original_price;
            $price *= $quantity;
            $total += $price;

            // Đẩy thông tin sản phẩm vào mảng $cartItems
            $cartItems[] = [
                'image' => asset($images[0]),
                'productName' => $product->name,
                'color' => $quan->color,
                'colorCode' => $quan->color_code,
                'size' => strtoupper($size),
                'quantity' => $quantity,
                'price' => number_format($price),
                'productLink' => route('product.detail', ['id' => $product->id, 'quanId' => $quan->id]),
            ];
        }

        // Trả về view (HTML) của cart preview
        return View::make('partials.cart_preview', compact('cartItems', 'total'))->render();
    }

}
