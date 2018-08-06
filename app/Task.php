<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'project_id'];
    
    public function project() {
        return $this->belongTo(Project::class);
    }
}
