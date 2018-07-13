<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email' , 'password','gender','content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function irais()
    {
        return $this->hasMany(Irai::class);
    }
    
    public function feed_irais()
    {
        $user_ids = $this->pluck('users.id');
        $user_ids[] = $this->id;
        return Irai::whereIn('user_id', $user_ids);
    }
    
    
    
    
    
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
    
    public function feed_comments()
    {
        $user_ids = $this->pluck('users.id');
        $user_ids[] = $this->id;
        return Comment::whereIn('user_id', $user_ids);
    }
    
    public function chats()
    {
       return $this->hasMany(Chat::class);
    }
    
    public function feed_chats()
    {
        $user_ids = $this->pluck('users.id');
        $user_ids[] = $this->id;
        return Chat::whereIn('user_id', $user_ids);
    }
    
    
    
    
    
    
    public function finishings()
    {
        return $this->belongsToMany(Irai::class, 'irai_finish', 'user_id', 'finish_id')->withTimestamps();
    }

    public function finish($iraiId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_finishing($iraiId);
        // 自分自身ではないかの確認
    
        if ($exist) {
            // 既にフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->finishings()->attach($iraiId);
            return true;
        }
    }
    
    public function unfinish($iraiId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_finishing($iraiId);
        
        if ($exist) {
            // 既にフォローしていればフォローを外す
            $this->finishings()->detach($iraiId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function is_finishing($iraiId) {
        return $this->finishings()->where('finish_id', $iraiId)->exists();
    }    
    
    
    
    
    
    public function helpings()
    {
        return $this->belongsToMany(Irai::class, 'irai_help', 'user_id', 'help_id')->withTimestamps();
    }
    
    public function helpees()
    {
        return $this->belongsToMany(Irai::class, 'irai_help' , 'help_id', 'user_id')->withTimestamps();
    }
    
    public function help($helpId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_helping($helpId);
        // 自分自身ではないかの確認
        $its_me = $this->id == $helpId;
        
        if ($exist || $its_me) {
            // 既にフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->helpings()->attach($helpId);
            return true;
        }
    }
    
    public function unhelp($helpId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_helping($helpId);
        // 自分自身ではないかの確認
        $its_me = $this->id == $helpId;

        if ($exist && !$its_me) {
            // 既にフォローしていればフォローを外す
            $this->helpings()->detach($helpId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    public function is_helping($helpId) {
    return $this->helpings()->where('help_id', $helpId)->exists();
    
    }
}

 