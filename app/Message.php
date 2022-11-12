<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'sent_date', 'title','email','messages',
    ];

    public function user(){
        return $this->belongsTo('App\UserDate');
    }

    public function message(){
        return $this->belongsTo('App\Customer');
    }
}
