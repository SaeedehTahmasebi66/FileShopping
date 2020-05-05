<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $newestproducts = Product::orderBy('created_at','desc')->take(6)->get();
        $popularProducts = Product::orderBy('clicks','desc')->take(6)->get();
        return view('index',compact('newestproducts','popularProducts'));
    }

    public function allProducts(){

        $products = Product::all();
        $resultNumber = $products->count();
        return view('shop-grid',compact('products','resultNumber'));
    }

    public function singleProduct($id){

        $product = Product::findOrFail($id);
        $product->increment('clicks');  // Increment the value in the clicks column.
        return view('single-product',compact('product'));
    }


    public function searchProducts(Request $request){

        $term = $request->post('search');
        $products = Product::whereHas('category', function($query) use($term) {
                    $query->where('name', 'LIKE', "%$term%");
                    })->orWhere('name','LIKE',"%$term%")
                    ->orderBy('name','asc')->get();
        $resultNumber = $products->count();
        return view('shop-grid',compact('products','resultNumber'));
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
