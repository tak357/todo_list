<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
        // return $this->hasMany('App\Task', 'folder_id', 'id');
    }
}
