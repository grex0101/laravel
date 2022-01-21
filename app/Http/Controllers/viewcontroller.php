<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class viewcontroller extends Controller
{
    public function home(){
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('home',compact('projects'));
    }
    
    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function index(){
        return view('project.index');
    }
}
