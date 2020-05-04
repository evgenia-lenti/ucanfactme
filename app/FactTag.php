<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactTag extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function facts()
    {
        return $this->belongsToMany('App\Fact');
    }
}
