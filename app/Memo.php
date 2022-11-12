<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'travel_id', 'user_id'
    ];

    public function travel()
    {
        return $this->belongsTo('App\Travel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function userdate()
    {
        return $this->belongsTo('App\UserDate');
    }


}
