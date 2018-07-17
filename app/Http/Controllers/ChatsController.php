<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Chat;

use App\Notification;

class ChatsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $irais = $user->feed_irais()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'irais' => $irais,
            ];
            $data += $this->counts($user);
            return view('irais.index', $data);
        }else {
            return view('welcome');
        }
         
    }
    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->chats()->create([
            'content' => $request->content,
            'irai_id' => $request->irai_id,
        ]);
        $user = \App\User::find($request->user_id);
        
        if($request->user_id != $user->id){
        $chats = \App\Chat::find($request->irai_id);
        
        $notification = new Notification;
        $notification->user_id = $request->user_id;
        $notification->type = $request->type;
        $notification->save();
            
        }
        
        return redirect(route('irais.thankyou',
            ['id'=>$request->irai_id
            ]));
    }
    
    public function destroy($id)
    {
        $chat = \App\Chat::find($id);
        
        if (\Auth::id() === $chat->user_id) {
            
        $chat->delete();
        
        // $chats = \App\chat::all();
        // $irai = \App\Irai::find($irai->id);

        return redirect()->back();
    
        }
    }
}
