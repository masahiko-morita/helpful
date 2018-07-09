<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Irai;

use App\Comment;

class CommentsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $comments = $user->comments()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'comments' => $comments,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
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
            'irai_id' => $request->irai_id
        ]);

        return view("irais.show");
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
