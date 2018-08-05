<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description'];

    // Create a relationship
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
