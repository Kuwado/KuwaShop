<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function add_product() {
        return view('admin.product.add', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm sản phẩm'
        ]);
    }

    public function edit_product() {
        return view('admin.product.edit', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Sửa sản phẩm'
        ]);
    }

    public function list_product() {
        return view('admin.product.list', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Danh sách sản phẩm'
        ]);
    }

    public function add_category_product() {
        return view('admin.product.add_category', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm danh mục sản phẩm'
        ]);
    }

    

    public function insert_product(Request $request) {
        dd($request -> all());
    }

}
