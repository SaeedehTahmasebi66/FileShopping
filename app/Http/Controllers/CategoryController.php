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
        return view('shop-grid',compact('products'));

        // $comments = App\Post::find(1)->comments;
        // foreach ($comments as $comment) {
        //     //
        // }

        
         // $products = Product::where('category_id',$id);
        // return view('shop-grid',compact('products'));
    }
}
