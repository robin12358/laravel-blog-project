<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $guarded = [];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
  
}
