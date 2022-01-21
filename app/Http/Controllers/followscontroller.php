<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class followscontroller extends Controller
{
    public function store(User $user){
     
       auth()->user()->following()->toggle($user->profile);
    }
}
