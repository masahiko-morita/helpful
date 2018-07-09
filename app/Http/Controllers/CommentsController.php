<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Comment;

class CommentsController extends Controller
{

    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->comments()->create([
            'content' => $request->content,
            'irai_id' => $request->irai_id,
        ]);
        
        // $irai = \App\Irai::find($id);
        
        // return redirect("/");
        return view("irais.comment", [
        
        ]);
    }
    
    public function destroy($id)
    {
        $comment = \App\Comment::find($id);

        if (\Auth::id() === $comment->user_id) {
            $comment->delete();
        }

        return redirect()->back();
    }
}
