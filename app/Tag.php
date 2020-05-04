<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function facts()
    {
        return $this->belongsToMany('App\Fact');
    }
}
