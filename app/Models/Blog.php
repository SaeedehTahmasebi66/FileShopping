<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    public function Image(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function Comment(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function getBlogExcerptAttribute(){
        return Str::words($this->description, '40');
    }
}
