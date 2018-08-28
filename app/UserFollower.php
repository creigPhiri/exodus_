<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollower extends Model
{
    protected $primaryKey = ['user_id','follower_id'];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

}
