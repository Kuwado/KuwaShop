<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Product;
use App\Models\Quan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller {
    // Home
    public function getHome() {
        $news = DB::table('products')->where('new', 1)->take(8)->get();
        $hots = DB::table('products')->where('hot', 1)->take(8)->get();
        $sales = DB::table('products')->where('sale', '!=', 'none')->take(8)->get();
        return view('front.home', [
            'news' => $news,
            'hots' => $hots,
            'sales' => $sales
        ]);
    }

    // Product detail
    public function getProductDetail(Request $request) {
        $product = Product::find($request->id);
        $quan = Quan::find($request->quanid);
        $products = Product::where('type', $product->type)->take(8)->get();
        $quans = Quan::where('product_id', $request->id)->get(); 
        return view('front.product.detail', [
            'product' => $product,
            'quan' => $quan,
            'products' => $products,
            'quans' => $quans
        ]);
    }
}
