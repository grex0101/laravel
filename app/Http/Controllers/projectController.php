<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Project;
use App\ProjectPhoto;

class projectController extends Controller
{
    public function create(){
        
        return view('project.create');
    }

    public function store(){
        /* 
         $project = request()->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>['required','image'],
        ]);
        $imagepath = request('image')->store('uploads','public');
         //$image =Image::make(public_path("storage/{$imagepath}"))->fit('1200','1200');
         //$image->save();
        Project::create([
            'name'=>$project['name'],
            'description'=>$project['description'],
            'main'=>true,
            'image'=>$imagepath
        ]);

        return redirect('project/create');
        */
        $project = request()->all();
        dd($project);
    }

    public function index($id){
             $projects = Project::where('id',$id)->get();
             $photos = ProjectPhoto::where('project_id',$id)->get();
             $next = Project::where('id','>',$id)->limit(1)->get();
             if($next->isEmpty()){
               $next = Project::where('id','<',$id)->limit(1)->get(); 
             }
             $previous = Project::where('id','<',$id)->limit(1)->get();
             if($previous->isEmpty()){
                $previous = Project::where('id','>',$id)->orderBy('id', 'desc')->limit(1)->get(); 
              }
             //dd($next);
             return view('project.index',compact('projects','photos','next','previous'));
    }

    public function create_photo($id){
        /**ProjectPhoto::create([
            'project_id'=>2,
            'image'=>'uploads/'+$id
        ]);
        dd('photo created!!');**/
        $projects = Project::where('id',$id)->get();
        return view('project.createphotos',compact('projects'));
    }

    public function store_photos($id){
        $photo = request()->validate([
            'image'=>['required','image'],
        ]);
        $imagepath = request('image')->store('uploads','public');
        ProjectPhoto::create([
            'project_id'=>$id,
            'photo'=>$imagepath
        ]);
        
        dd('photo created!');
    }
}
