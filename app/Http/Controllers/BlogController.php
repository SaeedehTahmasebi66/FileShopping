<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        // $blogs = Blog::all();
        $blogs = Blog::orderBy('created_at','desc')->paginate(3);
        return view('blog',compact('blogs'));
    }

    public function singleBlog($id){
        $blog = Blog::findOrFail($id);
        return view('blog-details',compact('blog'));
    }
}
