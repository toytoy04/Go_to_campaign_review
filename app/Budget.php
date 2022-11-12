<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function shops(){
        return $this->hasMany('App\Shop');
    }
}
