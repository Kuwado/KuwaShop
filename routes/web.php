<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');


// ------------------------------------------------------------ Admin --------------------------------------------------------------
Route::middleware('auth')->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', function() {
            return view('admin.home');
        });
        
        //Product -----------------------------------------------------------------------------
        // Thêm sản phẩm
        Route::post('/product/add', [ProductController::class,'insert_product']);
        Route::get('/product/create', [ProductController::class, 'add_product']);
        
        // Danh sách sản phẩm
        Route::get('/product/list', [ProductController::class, 'list_product']);
        
        // Sửa sản phẩm
        Route::get('/product/edit/{id}', [ProductController::class, 'edit_product_all']);
        Route::post('/product/update/{id}', [ProductController::class,'update_product_all']);
        Route::get('/product/edit/{id}/{color}', [ProductController::class, 'edit_product_detail']);
        Route::post('/product/update/{id}/{color}', [ProductController::class,'update_product_detail']);
        Route::get('/product/more/{id}', [ProductController::class, 'add_color_product']);
        Route::post('/product/more/{id}', [ProductController::class, 'insert_color_product']);
        
        // Xóa sản phẩm
        Route::get('/product/delete', [ProductController::class, 'delete_product']);
        
        
        // Category --------------------------------------------------------------------------------
        // Thêm danh mục
        Route::get('/product/add/category', [CategoryController::class, 'add_category_product']);
        Route::post('/product/add/category/type', [CategoryController::class, 'insert_type_product']);
        Route::post('/product/add/category/sub/{id}', [CategoryController::class, 'insert_sub_product']);
        Route::post('/product/add/category/mini/{id}', [CategoryController::class, 'insert_mini_product']);
        
        // Xóa danh mục
        Route::get('/product/delete/category/type', [CategoryController::class, 'delete_type']);
        Route::get('/product/delete/category/sub', [CategoryController::class, 'delete_sub']);
        Route::get('/product/delete/category/mini', [CategoryController::class, 'delete_mini']);
        
        // Order -------------------------------------------------------------------------------------
        Route::get('/order/list', [OrderController::class, 'list_order']);
        Route::get('/order/detail', [OrderController::class, 'detail_order']);
        
        // Revenue
        Route::get('/revenue/day', [RevenueController::class, 'day_revenue']);
        Route::get('/revenue/month', [RevenueController::class, 'month_revenue']);
        Route::get('/revenue/year', [RevenueController::class, 'year_revenue']);
        Route::get('/revenue/statistic', [RevenueController::class, 'statistic_revenue']);
    });
});


// Images upload
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);






// --------------------------------------------------------- Front --------------------------------------------------
Route::get('/', [FrontendController::class, 'getHome']);

Route::get('/product/detail/{id}/{quanid}', [FrontendController::class, 'getProductDetail']);


// -------------- Cart ---------------
// Thêm hàng vào giỏ
Route::post('/cart/preview/add', [CartController::class, 'addProductToPreviewCart']);
Route::post('/cart/preview/update/{key}', [CartController::class, 'updatePreviewCart']);
Route::get('/cart', [CartController::class, 'showCart']);
Route::post('/cart/update', [CartController::class, 'updateCart']);
Route::get('/cart/delete/{key}', [CartController::class, 'deleteProduct']);
Route::get('/cart/order', [CartController::class, 'orderCart']);



