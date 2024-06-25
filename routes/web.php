<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ------------------------------------------------------------ Admin --------------------------------------------------------------
Route::get('/admin', function() {
    return view('admin.home');
});

//Product -----------------------------------------------------------------------------
// Thêm sản phẩm
Route::post('/admin/product/add', [ProductController::class,'insert_product']);
Route::get('/admin/product/create', [ProductController::class, 'add_product']);

// Danh sách sản phẩm
Route::get('/admin/product/list', [ProductController::class, 'list_product']);

// Sửa sản phẩm
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit_product_all']);
Route::post('/admin/product/update/{id}', [ProductController::class,'update_product_all']);
Route::get('/admin/product/edit/{id}/{color}', [ProductController::class, 'edit_product_detail']);
Route::post('/admin/product/update/{id}/{color}', [ProductController::class,'update_product_detail']);
Route::get('/admin/product/more/{id}', [ProductController::class, 'add_color_product']);
Route::post('/admin/product/more/{id}', [ProductController::class, 'insert_color_product']);

// Xóa sản phẩm
Route::get('/admin/product/delete', [ProductController::class, 'delete_product']);


// Category --------------------------------------------------------------------------------
// Thêm danh mục
Route::get('/admin/product/add/category', [CategoryController::class, 'add_category_product']);
Route::post('/admin/product/add/category/type', [CategoryController::class, 'insert_type_product']);
Route::post('/admin/product/add/category/sub/{id}', [CategoryController::class, 'insert_sub_product']);
Route::post('/admin/product/add/category/mini/{id}', [CategoryController::class, 'insert_mini_product']);

// Xóa danh mục
Route::get('/admin/product/delete/category/type', [CategoryController::class, 'delete_type']);
Route::get('/admin/product/delete/category/sub', [CategoryController::class, 'delete_sub']);
Route::get('/admin/product/delete/category/mini', [CategoryController::class, 'delete_mini']);

// Order -------------------------------------------------------------------------------------
Route::get('/admin/order/list', [OrderController::class, 'list_order']);
Route::get('/admin/order/detail', [OrderController::class, 'detail_order']);

// Revenue
Route::get('/admin/revenue/day', [RevenueController::class, 'day_revenue']);
Route::get('/admin/revenue/month', [RevenueController::class, 'month_revenue']);
Route::get('/admin/revenue/year', [RevenueController::class, 'year_revenue']);
Route::get('/admin/revenue/statistic', [RevenueController::class, 'statistic_revenue']);

// Images upload
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);






// --------------------------------------------------------- Front --------------------------------------------------
Route::get('/home', [FrontendController::class, 'getHome']);

Route::get('/product/detail/{id}/{quanid}', [FrontendController::class, 'getProductDetail']);


// -------------- Cart ---------------
// Thêm hàng vào giỏ
Route::post('/cart/add', [CartController::class, 'addProduct']);