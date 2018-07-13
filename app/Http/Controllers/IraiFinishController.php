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
        $irais = $user->feed_irais()->orderBy('created_at', 'desc')->paginate(10);
        
        
        \Auth::user()->finish($id);
        return view('irais.index', [
            'irais' => $irais,
        
        ]);
    
    }

    public function destroy($id)
    {
        \Auth::user()->unfinish($id);
        return redirect()->back();
    }
}
