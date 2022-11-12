<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'application_date', 'departure_date', 'day', 'people', 'region_id', 'cost', 'subsidy', 'coupon', 'deleted_at', 'customer_id',
    ];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function memos()
    {
        return $this->hasMany('App\Memo');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
