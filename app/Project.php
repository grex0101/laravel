<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectPhoto;

class Project extends Model
{
    protected $fillable = [
        'name', 'image', 'description','main'
    ];

    public function photos()
    {
      return $this->hasMany(ProjectPhoto::class);
    }

    public function posts(){
      return $this->hasMany(Post::class)->orderBy('created_at','DESC');
  }
}
