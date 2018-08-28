<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


        protected $primaryKey ='user_id';


        protected $fillable = [
            'name', 'email', 'password',
        ];


        protected $hidden = [
            'password', 'remember_token',
        ];


        public function posts()
        {
            return $this->hasMany(Post::class,'user_id');
        }

        public function userFollowers(){
            return $this->hasMany(UserFollower::class,'user_id');
        }


}
