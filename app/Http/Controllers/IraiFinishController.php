<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

use App\Notification;

class IraiFinishController extends Controller
{
    public function store($id)
    {
        $user = \Auth::user();
        $irais = $user->feed_irais()->orderBy('created_at', 'desc')->paginate(8);

        \Auth::user()->finish($id);
        
        return redirect()->route('irais.index', ['irais' => $irais]);
        
    }

    public function destroy($id)
    {
        $irai = \App\Irai::find($id);
        
        
        if (\Auth::id() === $irai->user_id) {
        
        $comments = \App\Irai::find($id)->comments()->orderBy('id','desc')->get();
        
        foreach($comments as $comment){

        if(\Auth::id() != $comment->user_id){
        $notification = new Notification;
        $notification->irai_id = $comment->irai_id;
        $notification->user_id = $comment->user_id;
        $notification->type = 'message';
        $notification->save();

            }    
        } 
        
        $irai->alive = 0;
        $irai->save();
        
        $irais = Irai::orderBy('created_at', 'desc')->paginate(8);  
        
        return redirect()->route('irais.index', ['irais' => $irais]);
        }
    }
}
