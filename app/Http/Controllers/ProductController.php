<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts(){

        $products=Product::all();
        return view('shop-grid',compact('products'));
    }

    public function singleProduct($id){

        $product = Product::findOrFail($id);
        return view('single-product',compact('product'));
    }

    public function latestProducts(){

        $products= Product::orderBy('created_at','desc')->take(6)->get();
        return view('index',compact('products'));
    }


    public function addToCart(){

        //showing number of shop at the button of cart in menu at the top
        //write "add to your cart" instead of  "add to cart" : ajax ???

    }

    public function deleteProducts(){

    }

    public function updateProducts(){

    }

    public function availableProducts(){

    }
}