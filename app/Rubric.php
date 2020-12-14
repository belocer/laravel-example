<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    // $rubric = Rubric::find(1);
    // $rubric->post
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
