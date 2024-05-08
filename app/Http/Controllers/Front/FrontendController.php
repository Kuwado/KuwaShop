<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller {
    // Home
    public function getHome() {
        $news = DB::table('products')->where('new', 1)->get();
        $hots = DB::table('products')->where('hot', 1)->get();
        $sales = DB::table('products')->where('sale', '!=', 'none')->get();
        return view('front.home', [
            'news' => $news,
            'hots' => $hots,
            'sales' => $sales
        ]);
    }

}
