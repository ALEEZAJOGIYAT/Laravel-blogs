<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;


    public function categories()
    {
        return $this->belongsToMany('App\Model\user\category','category_posts')->withTimestamps();
    }

}
