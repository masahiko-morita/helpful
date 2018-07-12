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
        \Auth::user()->finish($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfinish($id);
        return redirect()->back();
    }
}
