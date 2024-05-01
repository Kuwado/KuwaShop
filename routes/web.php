<?php

use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\revenueController;
use App\Http\Controllers\Admin\uploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Admin
Route::get('/admin', function() {
    return view('admin.home');
});

//Product
Route::post('/admin/product/add', [productController::class,'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/list', [productController::class, 'list_product']);
Route::get('/admin/product/edit', [productController::class, 'edit_product']);
Route::get('/admin/product/add_category', [productController::class, 'add_category_product']);

// Order
Route::get('/admin/order/list', [orderController::class, 'list_order']);
Route::get('/admin/order/detail', [orderController::class, 'detail_order']);

// Revenue
Route::get('/admin/revenue/day', [revenueController::class, 'day_revenue']);
Route::get('/admin/revenue/month', [revenueController::class, 'month_revenue']);
Route::get('/admin/revenue/year', [revenueController::class, 'year_revenue']);
Route::get('/admin/revenue/statistic', [revenueController::class, 'statistic_revenue']);

// Images
Route::post('/upload', [uploadController::class,'uploadImage']);
Route::post('/uploads', [uploadController::class,'uploadImages']);
