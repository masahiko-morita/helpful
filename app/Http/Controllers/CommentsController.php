<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Comment;

use App\Notification;

class CommentsController extends Controller
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

        $request->user()->comments()->create([
            'content' => $request->content,
            'irai_id' => $request->irai_id,
        ]);
        
        
        $comments = \App\Comment::find($request->irai_id);
        
        
        if($request->user_id != $comments->user_id){
            
        $notification = new Notification;
        $notification->user_id = $request->user_id;
        $notification->type = $request->type;
        $notification->save();
            
        }
            
        
        return redirect(route('irais.show',
            ['id'=>$request->irai_id]));
    }
    
    public function destroy($id)
    {
        $comment = \App\Comment::find($id);
        
        if (\Auth::id() === $comment->user_id) {
            
        $comment->delete();
        
        // $comments = \App\Comment::all();
        // $irai = \App\Irai::find($irai->id);

        return redirect()->back();
    
        }
    }
}



        