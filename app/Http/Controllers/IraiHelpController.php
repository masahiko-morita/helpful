<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

class IraiHelpController extends Controller
{
    public function store($id)
    {
        $irai = Irai::find($id);
        $chats = Chat::orderBy('created_at', 'desc')->paginate(10);
        \Auth::user()->help($id);
        return view('irais.thankyou', [
            'irai' => $irai,
            'chats' => $chats,
        ]);
    }

    public function destroy($id)
    {
        $irai = Irai::find($id);
        $chats = Chat::orderBy('created_at', 'desc')->paginate(10);
        
        \Auth::user()->unhelp($id);
        return view('irais.thankyou', [
            'irai' => $irai,
            'chats' => $chats,
        ]);
    }
}
