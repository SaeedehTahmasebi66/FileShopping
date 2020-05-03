<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts(){

        $products = Product::all();
        return view('shop-grid',compact('products'));
    }

    public function singleProduct($id){

        $product = Product::findOrFail($id);
        // $product->increment('clicks'); // Increment the value in the clicks column.
        // $product->update(); // Save our updated product.
        return view('single-product',compact('product'));
    }

    public function latestPopularProducts(){

        $products = Product::orderBy('created_at','desc')->take(6)->get();
        $popularProducts = Product::orderBy('clicks','desc')->take(6)->get();
        return view('index',compact('products','popularProducts'));
    }

    // public function popularProducts(){

    //     $popularProducts = Product::orderBy('clicks','desc')->take(2)->get();
    //     return view('shop-grid',compact('popularProducts'));
    // }


    public function searchProducts(Request $request){

        $term = $request->post('search');
        $products = Product::whereHas('category', function($query) use($term) {
            $query->where('name', 'like', '%'.$term.'%');
        })->orWhere('name','LIKE','%'.$term.'%')->orderBy('name', 'asc')->get();

        return view('shop-grid',compact('products'));
    }


    public function addToCart(Request $request)
    {
        // return $request->product_id;

        if ($request->session()->has('cart')){
            $cart = session()->get('cart');
            if ( array_key_exists($request->product_id, $cart) ) {
                $cart[$request->product_id]++;
            }else{
                $cart[$request->product_id] = 1;
            }
            $request->session()->put('cart', $cart);
        }else{
            $cart = array();
            $cart[$request->product_id] = 1;
            $request->session()->put('cart', $cart);
        }
        // $value = session()->get('cart');
        // var_dump($value);
        return view('layouts.cart');
    }
    public function remove(Request $request)
    {
        if($request->product_id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->product_id])) {

                unset($cart[$request->product_id]);

                session()->put('cart', $cart);
            }
        }
        return view('layouts.cart');
    }

    public function cart()
    {
        return view('cart');
    }


}
