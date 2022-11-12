<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
         'title', 'deadline', 'is_finished',
    ];

    public function travel(){
        return $this->belongsTo('App\Travel');
    }
}
