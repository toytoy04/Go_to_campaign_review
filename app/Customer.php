<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'phone_number', 'email', 'covid_document',
    ];

    public function user(){
        return $this->belongsTo('App\UserDate');
    }

    public function travels(){
        return $this->hasMany('App\Travel');
    }
}
