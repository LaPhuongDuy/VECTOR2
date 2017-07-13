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

        $products = Product::whereIn('category_id', array_keys(Category::getLastChildByParentId($id)))->paginate(12);

        return view('customers.category_product.index', compact('id', 'cates', 'products'));
    }
}
