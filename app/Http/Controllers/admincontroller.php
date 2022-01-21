<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
use App\Message;

class admincontroller extends Controller
{


    public function add_project(){
     return view('project.create');
    }

    public function message(){
        $message = request()->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
        ]);
        Message::create([
            'name'=>$message['name'],
            'email'=>$message['email'],
            'phone_number'=>$message['phone_number'],
            'message'=>$message['message'],
        ]);
        dd($message);
    }
}
