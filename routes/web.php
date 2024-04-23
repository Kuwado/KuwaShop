<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.home');
});

Route::get('/admin/product_add', function() {
    return view('admin.product-add');
});

Route::get('/admin/product_list', function() {
    return view('admin.product-list');
});

Route::get('/admin/order', function() {
    return view('admin.order');
});

Route::get('/admin/order-detail', function() {
    return view('admin.order-detail');
});

Route::get('/admin/revenue', function() {
    return view('admin.revenue');
});