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
        $newComment->comment_text = $request->post('review');
        $newComment->user_id = Auth::id();
        // $id = Auth::id();
        $newComment->product_id = $request->post('id');

        $newComment->save();
        // return ('دیدگاه شما با موفقیت ارسال شد. متشکریم.');
        return redirect("single-product/$newComment->product_id")->with('success','پیام شما با موفقیت ارسال شد. متشکریم.');
    }
}
