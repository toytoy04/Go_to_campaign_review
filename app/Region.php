<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function travels(){
        return $this->hasMany('App\Travel');
    }
}
