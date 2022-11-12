<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDate extends Model
{

    public function shops(){
        return $this->belongsTo('App\Shop');
    }

    public function customers(){
        return $this->hasMany('App\Customer');
    }

    public function memo()
    {
        return $this->hasMany('App\Memo');
    }

}
