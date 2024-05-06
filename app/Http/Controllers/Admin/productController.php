<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Quan;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add_product()
    {
        return view('admin.product.add', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm sản phẩm'
        ]);
    }

// Lấy danh sách sản phẩm
    public function list_product() {
        //$products = DB::table('products')->paginate(5);
        $products = Product::all();
        return view('admin.product.list', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Danh sách sản phẩm',
            'products' => $products
        ]);
    }

// Thêm thông tin sản phẩm vào db
    private function checkProductNameExists($productName) {
        // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu hay không
        $existingProduct = Product::where('name', $productName)->exists();
        return $existingProduct;
    }

    private function getProductIdByName($productName){
        $product = Product::where('name', $productName)->first();
        if ($product) {
            return $product->id;
        }
        return null; // Trả về null nếu không tìm thấy sản phẩm
    }

    private function checkColor($name, $color)
    {
        $product = Product::where('name', $name)->first();
        $quan = Quan::where('product_id', $product->id)->where('color', $color)->first();
        if ($quan) {
            return $quan;
        } else {
            return null;
        }
    }

    public function insert_product(Request $request) {
        $product = new Product();
        $quan = new Quan();
        $productName = $request->input('product-name');
        // Kiểm tra xem sản phẩm đã tồn tại trong cơ sở dữ liệu hay không
        if ($this->checkProductNameExists($productName)) {
            // Lấy id từ tên sản phẩm
            $productId = $this->getProductIdByName($productName);
            $quan->product_id = $productId;
            $quanCheck = $this->checkColor($productName, $request->input('product-color'));
            // Nếu sản phẩm với color này đã tồn tại -> update thêm số lượng
            if ($quanCheck != null) {
                $quanCheck->s += $request->input('product-size-s') ?? 0;
                $quanCheck->m += $request->input('product-size-m') ?? 0;
                $quanCheck->l += $request->input('product-size-l') ?? 0;
                $quanCheck->xl += $request->input('product-size-xl') ?? 0;
                $quanCheck->xxl += $request->input('product-size-xxl') ?? 0;
                $quanCheck->save(); 
            // Nếu color mới -> tạo mới
            } else {
                $quan->color = $request->input('product-color');
                $quan->color_code = $request->input('product-color-code');
                $quan->s = $request->input('product-size-s') ?? 0; // Giá trị mặc định là 0 nếu không được truyền
                $quan->m = $request->input('product-size-m') ?? 0;
                $quan->l = $request->input('product-size-l') ?? 0;
                $quan->xl = $request->input('product-size-xl') ?? 0;
                $quan->xxl = $request->input('product-size-xxl') ?? 0;
                $product_images = implode('*', $request->input('images'));
                $quan->images = $product_images;
                $quan->save();
            }
        // Nếu sản phẩm chưa tồn tại
        } else {
            // Thêm vào bảng Products
            $product->sku = $request->input('product-name');
            $product->name = $request->input('product-name');
            $product->image = $request->input('product-image');
            $product->type = $request->input('product-type');
            $product->original_price = $request->input('product-price');
            $product->discount_price = $request->input('product-price-discount');
            $product->intro = $request->input('product-gt-text');
            $product->detail = $request->input('product-ct-text');
            $product->preserve = $request->input('product-bq-text');
            $product->save();
            $sku = '57VH' . $product->id;
            $product->sku = $sku;
            $product->save();

            // Thêm vào bảng Quans
            $quan->product_id = $product->id;
            $quan->color = $request->input('product-color');
            $quan->color_code = $request->input('product-color-code');
            $quan->s = $request->input('product-size-s') ?? 0; // Giá trị mặc định là 0 nếu không được truyền
            $quan->m = $request->input('product-size-m') ?? 0;
            $quan->l = $request->input('product-size-l') ?? 0;
            $quan->xl = $request->input('product-size-xl') ?? 0;
            $quan->xxl = $request->input('product-size-xxl') ?? 0;
            $product_images = implode('*', $request->input('images'));
            $quan->images = $product_images;
            $quan->save();
        }
        return redirect() -> back();
    }

// Xóa sản phẩm
    public function delete_product(Request $request) {
        Product::find($request->product_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }

// Edit sản phẩm
    // Tất cả màu của sản phẩm
    public function edit_product_all(Request $request) {
        $product = Product::find($request->id);
        $quans = Quan::where('product_id', $request->id)->get();        
        return view('admin.product.edit.all', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Sửa thông tin sản phẩm',
            'product' => $product,
            'quans' => $quans
        ]);
    }

    // Edit chi tiết 
    public function edit_product_detail(Request $request) {
        $product = Product::find($request->id);
        $quan = Quan::where('product_id', $request->id)->where('color', $request->color)->first();        
        return view('admin.product.edit.detail', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Sửa số lượng sản phẩm',
            'product' => $product,
            'quan' => $quan
        ]);
    }

// Update sản phẩm
    // Update thông tin
    public function update_product_all(Request $request) {
        $product = Product::find($request->id);
        $product->name = $request->input('product-name');
        $product->image = $request->input('product-image');
        $product->type = $request->input('product-type');
        $product->original_price = $request->input('product-price');
        $product->discount_price = $request->input('product-price-discount');
        $product->intro = $request->input('product-gt-text');
        $product->detail = $request->input('product-ct-text');
        $product->preserve = $request->input('product-bq-text');
        $product->save();
        return redirect('/admin/product/list');
    }

    //Update số lượng
    public function update_product_detail(Request $request) {
        $quan = Quan::where('product_id', $request->id)->where('color', $request->color)->first();  
        $quan->s = $request->input('product-size-s') ?? 0;
        $quan->m = $request->input('product-size-m') ?? 0;
        $quan->l = $request->input('product-size-l') ?? 0;
        $quan->xl = $request->input('product-size-xl') ?? 0;
        $quan->xxl = $request->input('product-size-xxl') ?? 0;
        $product_images = implode('*', $request->input('images'));
        $quan->images = $product_images;
        $quan->save();  
        return redirect('/admin/product/edit/' . $quan->product_id);    
    }

    // Thêm màu cho sản phẩm
    public function add_color_product(Request $request) {
        $product = Product::find($request->id);
        $quans = Quan::where('product_id', $request->id)->get();  
        $colors = [];
        foreach ($quans as $quan) {
            $colors[] = $quan->color;
        }   
        return view('admin.product.edit.more', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm màu cho sản phẩm',
            'product' => $product,
            'colors' => $colors
        ]);
    }

    // Post thêm color cho sp
    public function insert_color_product(Request $request) {
        $quan = new Quan();
        $quan->product_id = $request->id;
        $quan->color = $request->input('product-color');
        $quan->color_code = $request->input('product-color-code');
        $quan->s = $request->input('product-size-s') ?? 0; 
        $quan->m = $request->input('product-size-m') ?? 0;
        $quan->l = $request->input('product-size-l') ?? 0;
        $quan->xl = $request->input('product-size-xl') ?? 0;
        $quan->xxl = $request->input('product-size-xxl') ?? 0;
        $product_images = implode('*', $request->input('images'));
        $quan->images = $product_images;
        $quan->save();
        return redirect() -> back();
    }

// Thêm danh mục sản phẩm
    public function add_category_product() {
        $types = DB::table('types')->get();
        return view('admin.product.category.add', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm danh mục sản phẩm',
            'types' => $types
        ]);
    }




}
