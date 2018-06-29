<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';

    public function comments()
    //sets the relationship for the post to many comments
    {
        return $this->hasMany(Comment::class,'post_id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
