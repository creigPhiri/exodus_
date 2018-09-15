<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollower extends Model
{
//    protected $primaryKey = ['follower_id','followee_id'];
      protected $fillable = ['follower_id','followee_id'];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

}
