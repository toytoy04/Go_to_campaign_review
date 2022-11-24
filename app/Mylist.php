<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mylist extends Model
{
    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }
}
