<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_id';
    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
