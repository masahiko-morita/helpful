<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    // 通知用モデル
    protected $fillable = ['user_id','irai_id','type'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
