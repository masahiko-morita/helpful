<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

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
        $irai = Irai::find($id);
        
        if (\Auth::id() === $irai->user_id) {
            
        $irai = \App\Irai::find($id);
        $irai->delete();
        

        $irais = Irai::orderBy('created_at', 'desc')->paginate(8);

        return view("irais.index",
              ['irais' => $irais]);
        }
    }
}
