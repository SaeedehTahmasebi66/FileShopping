<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'description' => 'string',
            'category_id' => 'required',
            'price' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png,gif|max:10240'
        ]);

        $newProduct = new Product();
        $newProduct->name = $request->post('name');
        $newProduct->description = $request->post('description');
        $newProduct->price = $request->post('price');
        $newProduct->category_id = $request->post('category_id');

        $destination= base_path().'/public/assets/images/books'.date('Y').'/'.date('m');
        if(!is_dir($destination))
        {
            mkdir($destination,0777,true);
        }
        $destination=$destination.'/';
        $filename=rand(1111111,99999999);
        $file=$request->file('file');
        $file->move($destination,$filename.$request->file->getClientOriginalName());

        $newProduct->save();
        return redirect('admin/products')->with('success', 'محصول جدید افزوده شد !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required | string',
            'description' => 'string',
            'category_id' => 'required',
            'price' => 'required',
        ]);

        $product->name = $request->post('name');
        $product->description = $request->post('description');
        $product->price = $request->post('price');
        $product->category_id = $request->post('category_id');
        
        $product->save();

        return redirect('admin/products')->with('success', 'محصول به روز رسانی شد !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin/products')->with('success', 'محصول مورد نظر حذف شد!');
    }
}
