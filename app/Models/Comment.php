<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function commentable(){
        return $this->morphTo();
    }
}
