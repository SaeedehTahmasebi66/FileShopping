<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function Image(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function Tag()
    {
        return $this->morphtoMany("App\Models\Tag","taggable");
    }
    public function Comment(){
        return $this->hasMany('App\Models\Comment');
    }
}
