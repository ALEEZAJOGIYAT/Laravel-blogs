<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'subtitle',
        'slug',
        'body',
    ];
    protected $hidden=[];

    public function categories()
    {
        return $this->belongsToMany('App\Models\user\category','category_post')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
