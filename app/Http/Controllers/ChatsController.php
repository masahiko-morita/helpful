<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Chat;

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
        

        $chats = \App\Chat::find($request->irai_id);
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
