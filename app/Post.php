<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DefaultQuery;

class Post extends Model
{
    protected $fillable =['post_title','user_id','category','details','image'];

        public function image()
    {
        return $this->belongsTo('App\Media::class','id','image');
    }
    public function category()
    {
        return $this->belongsTo('App\Category::class','id','category');
    }
}
