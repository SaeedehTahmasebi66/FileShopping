<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Product;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        return view('wishlist',compact('user'));
    }
    public function addToWhishlist($id){

        Auth::user()->Product()->attach($id);
        // $user = Auth::user();
        // return view('wishlist',compact('user'));
        return redirect()->back();
    }
    public function removeFromWhishlist($id){

        Auth::user()->Product()->detach($id);
        return redirect()->back();
    }
}
