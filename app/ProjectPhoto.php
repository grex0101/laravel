<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class ProjectPhoto extends Model
{

    protected $fillable = [
        'project_id','photo',
    ];

    public function project()
    {
      return $this->belongsTo(Project::class);
    }
}
