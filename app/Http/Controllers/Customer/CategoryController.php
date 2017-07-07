<?php

namespace App\Http\Controllers\Customer;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($id)
    {
        $cates = Category::getAllParentCategoriesById($id);
        //$childrenId = array_keys(Category::getChildrenByParentId($id));
        //dd(Product::whereIn('category_id', $childrenId)->count());
        return view('customers.category_product.index', compact('id', 'cates'));
    }
}
