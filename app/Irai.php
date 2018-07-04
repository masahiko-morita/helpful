<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Irai extends Model
{
     protected $fillable = ['content', 'user_id','title', 'timespan', 'station', 'reward', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

