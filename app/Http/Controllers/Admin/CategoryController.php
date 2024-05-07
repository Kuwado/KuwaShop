<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mini;
use App\Models\Sub;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Thêm danh mục sản phẩm --------------------------------------------------------------------------------------------------
    public function add_category_product() {
        $types = DB::table('types')->get();
        return view('admin.product.category.add', [
            'title' => 'Sản phẩm',
            'subTitle' => 'Thêm danh mục sản phẩm',
            'types' => $types
        ]);
    }

    // Thêm type vào db
    public function insert_type_product(Request $request) {
        $types = $request->input('types');
        foreach($types as $type) {
            $typeDB = new Type();
            $typeDB->name = $type;
            $typeDB->save();
        }
        return redirect() -> back();
    }

    public function insert_sub_product(Request $request) {
        $subs = $request->input('subs');
        foreach($subs as $sub) {
            $subDB = new Sub();
            $subDB->name = $sub;
            $subDB->type_id = $request->id;
            $subDB->save();
        }
        return redirect() -> back();
    }

    public function insert_mini_product(Request $request) {
        $minis = $request->input('minis');
        foreach($minis as $mini) {
            $miniDB = new Mini();
            $miniDB->name = $mini;
            $miniDB->sub_id = $request->id;
            $miniDB->save();
        }
        return redirect() -> back();
    }

// Xóa danh mục sản phẩm ----------------------------------------------------------------------------------------------
    // Xóa type
    public function delete_type(Request $request) {
        Type::find($request->category_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }

    // Xóa sub
    public function delete_sub(Request $request) {
        Sub::find($request->category_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }

    // Xóa mini
    public function delete_mini(Request $request) {
        Mini::find($request->category_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }

}
