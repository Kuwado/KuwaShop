<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function day_revenue() {
        return view('admin.revenue.day', [
            'title' => 'Doanh thu',
            'subTitle' => 'Theo ngày'
        ]);
    }

    public function month_revenue() {
        return view('admin.revenue.month', [
            'title' => 'Doanh thu',
            'subTitle' => 'Theo tháng'
        ]);
    }

    public function year_revenue() {
        return view('admin.revenue.year', [
            'title' => 'Doanh thu',
            'subTitle' => 'Theo năm'
        ]);
    }

    public function statistic_revenue() {
        return view('admin.revenue.statistic', [
            'title' => 'Doanh thu',
            'subTitle' => 'Thống kê'
        ]);
    }
}
