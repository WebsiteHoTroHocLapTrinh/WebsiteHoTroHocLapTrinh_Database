<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = "activities";

    public function user() {
    	return $this->belongsTo('App\User', 'user_id' ,'id');
    }
}
