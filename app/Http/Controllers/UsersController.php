<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $irais = $user->irais()->orderBy('created_at', 'desc')->paginate(10);
        // $favorites = $user->favorites()->orderBy('created_at', 'desc')->paginate(10);
        // feed_micropostsで自分がフォローしているアカウントのタイムラインの表示している。
        // micropostsだけだと自分のしか反映されない
       
       $data = [
                'user' => $user,
                'irais' => $irais,
                // 'favorites' => $favorites,
            ];

            $data += $this->counts($user);

 
        return view('users.show', $data);
    }
}

