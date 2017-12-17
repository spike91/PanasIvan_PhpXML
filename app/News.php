<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function categories() 
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
