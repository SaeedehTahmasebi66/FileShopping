<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        return view('profile',compact('user'));
    }

    public function update($id){

        // return view('profile');
    }

    // public function removeComment($id){

    //     Auth::user()->Comment($id)->delete(); //error
    //     return redirect()->back();
    // }
}
