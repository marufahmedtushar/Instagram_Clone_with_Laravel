<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    protected $table ='reacts';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
