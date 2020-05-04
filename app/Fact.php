<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{

    protected $dates =[
        'publish_date',
    ];

    public function getPublishDateReadableAttribute()
    {
        return $this->publish_date->toFormattedDateString();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
