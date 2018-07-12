<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Irai extends Model
{
     protected $fillable = ['content','title', 'start', 'finish', 'station', 'reward','comment_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
    
    public function chats()
    {
       return $this->hasMany(Chat::class);
    }
    
}

 