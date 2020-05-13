<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function validation(Request $request){
        $request->validate([
            'firstname' => 'required | string',
            'lastname' => 'required | string',
            'email' => 'required | email | unique:users,email',
            'phonenumber' => 'numeric | regex:/[0-9]{11}/',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $newComment = new Contact();
        $newComment->firstname = $request->post('firstname');
        $newComment->lastname = $request->post('lastname');
        $newComment->email = $request->post('email');
        $newComment->phonenumber = $request->post('phonenumber');
        $newComment->subject = $request->post('subject');
        $newComment->message = $request->post('message');

        $newComment->save();
        return ('پیام شما با موفقیت ارسال شد. متشکریم.');
    }
}
