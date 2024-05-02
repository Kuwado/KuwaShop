<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Quan;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function add_product()
    {
        return view('admin.product.add', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm sản phẩm'
        ]);
    }

    public function edit_product()
    {
        return view('admin.product.edit', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Sửa sản phẩm'
        ]);
    }

    public function list_product()
    {
        return view('admin.product.list', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Danh sách sản phẩm'
        ]);
    }

    public function add_category_product()
    {
        return view('admin.product.add_category', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm danh mục sản phẩm'
        ]);
    }

    private function checkProductNameExists($productName)
    {
        // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu hay không
        $existingProduct = Product::where('name', $productName)->exists();

        return $existingProduct;
    }

    private function getProductIdByName($productName)
    {
        $product = Product::where('name', $productName)->first();
        if ($product) {
            return $product->id;
        }
        return null; // Trả về null nếu không tìm thấy sản phẩm
    }



    public function insert_product(Request $request)
    {
        $product = new Product();
        $quan = new Quan();
        $productName = $request->input('product-name');
        // Kiểm tra xem sản phẩm đã tồn tại trong cơ sở dữ liệu hay không
        if ($this->checkProductNameExists($productName)) {
            // Lấy id từ tên sản phẩm
            $productId = $this->getProductIdByName($productName);
            $quan->product_id = $productId;
            $quan->color = $request->input('product-color');
            $quan->s = $request->input('product-size-s'); // Giá trị mặc định là 0 nếu không được truyền
            $quan->m = $request->input('product-size-m');
            $quan->l = $request->input('product-size-l');
            $quan->xl = $request->input('product-size-xl');
            $quan->xxl = $request->input('product-size-xxl');
            $product_images = implode('*', $request->input('images'));
            $quan->images = $product_images;            
            $quan->save();
        } else {
            // Thêm vào bảng Products
            $sku = '57VH' . $product->id;
            // $product->sku = $sku;
            $product->sku = $request->input('product-name');
            $product->name = $request->input('product-name');
            $product->type = $request->input('product-type');
            $product->original_price = $request->input('product-price');
            $product->discount_price = $request->input('product-price-discount');
            $product->intro = $request->input('product-gt-text');
            $product->detail = $request->input('product-ct-text');
            $product->preserve = $request->input('product-bq-text');
            $product->save();

            // Thêm vào bảng Quans
            $quan->product_id = $product->id;
            $quan->color = $request->input('product-color');
            $quan->s = $request->input('product-size-s', 0); // Giá trị mặc định là 0 nếu không được truyền
            $quan->m = $request->input('product-size-m', 0);
            $quan->l = $request->input('product-size-l', 0);
            $quan->xl = $request->input('product-size-xl', 0);
            $quan->xxl = $request->input('product-size-xxl', 0);
            $product_images = implode('*', $request->input('images'));
            $quan->images = $product_images;
            $quan->save();
        }
    }
}
