<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Irai extends Model
{
     protected $fillable = ['content','title', 'start', 'finish', 'station', 'reward', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

