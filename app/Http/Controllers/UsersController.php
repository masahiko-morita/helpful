<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Chat;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.show', [
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
    
    public function store(Request $request)
    {
        $this->validate($request, [
          
            'content' => 'required|max:191',
        ]);

        $request->user()->users()->create([

            'content' => $request->content,
        ]);

        return redirect("users.show");
                
    }
            

    
     public function edit($id)
        {
            $user = User::find($id);
            if (\Auth::check()) {
            return view('users.edit', [
                'user' => $user,
            ]);
        }else {
            return redirect("/");
            }
        
        }
    
    public function update(Request $request, $id)
    {
      
        
        $this->validate($request, [
            
            'content' => 'required|max:191',
        ]);

        
        $user = User::find($id);
    
        $user->content = $request->content;
        $user->save();
        
        $irais = $user->irais()->orderBy('created_at', 'desc')->paginate(10);        
        
        $data = [
                'user' => $user,
                'irais' => $irais,
                // 'favorites' => $favorites,
                ];
                
                $data += $this->counts($user);

        return view('users.show',$data);
    }
    
    public function finishings($id)
    {
        $user = User::find($id);
        $finishings = $user->finishings()->paginate(10);

        $data = [
            'user' => $user,
            'finishings' => $finishings,
        ];
        
        $data += $this->counts($user);

        return view('users.finishings', $data);
    }
    
    public function helpings($id)
    {
        $user = User::find($id);
        $helpings = $user->helpings()->paginate(10);

        $data = [
            'user' => $user,
            'helpings' => $helpings,
        ];

        $data += $this->counts($user);

        return view('users.helpings', $data);
    }
}

