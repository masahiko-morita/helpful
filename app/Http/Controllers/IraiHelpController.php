<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

class IraiHelpController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->help($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unhelp($id);
        return redirect()->back();
    }
}
