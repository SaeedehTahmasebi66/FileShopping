<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function selectedCategory($id){

        $category = Category::findOrFail($id);
        $products = $category->product;
        $resultNumber = $products->count();
        return view('shop-grid',compact('products','resultNumber'));

    }
}
