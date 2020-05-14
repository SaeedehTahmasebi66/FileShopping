<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function User(){
        return $this->belongsToMany('App\User','wishlist');
    }
    public function getProductExcerptAttribute(){
        return Str::words($this->description, '10');
    }

}
