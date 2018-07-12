<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

class IraiFinishController extends Controller
{
    public function store(Request $request)
    {
        \Auth::user()->finish($request->irai_id);
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        \Auth::user()->unfinish($request->irai_id);
        return redirect()->back();
    }
}
