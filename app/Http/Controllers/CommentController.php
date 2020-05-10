<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function insertComment(Request $request){

        $newComment = new Comment();
        $newComment->body = $request->post('review');
        $newComment->user_id = Auth::id();
        $newComment->user_name = Auth::user()->name;
        $newComment->commentable_id = $request->post('id');
        $newComment->commentable_type = $request->post('type');

        $newComment->save();
        // return ('دیدگاه شما با موفقیت ارسال شد. متشکریم.');
        // return redirect("single-product/$newComment->product_id")->with('success','پیام شما با موفقیت ارسال شد. متشکریم.');
        return back()->with('success','پیام شما با موفقیت ارسال شد. متشکریم.');
    }
}
