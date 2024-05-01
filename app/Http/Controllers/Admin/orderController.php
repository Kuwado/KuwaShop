<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function list_order() {
        return view('admin.order.list', [
            'title' => 'Đơn hàng',
            'subTitle' => 'Danh sách đơn hàng'
        ]);
    }

    public function detail_order() {
        return view('admin.order.list', [
            'title' => 'Đơn hàng',
            'subTitle' => 'Chi tiết đơn hàng'
        ]);
    }
}
