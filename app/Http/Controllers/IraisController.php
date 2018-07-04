<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IraisController extends Controller
{
    // public function index()
    // {
    //     $data = [];
    //     if (\Auth::check()) {
    //         $user = \Auth::user();
    //         $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

    //         $data = [
    //             'user' => $user,
    //             'microposts' => $microposts,
    //         ];
    //         $data += $this->counts($user);
    //         return view('users.show', $data);
    //     }else {
    //         return view('welcome');
    //     }
    // }
    
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required|max:50',
    //         'content' => 'required|max:191',
    //         'timespan' => 'required|max:50',
    // //         'station' => 'required|max:20',
    //             'reward' => 'required|max:50',
                    
    //     ]);

    //     $request->user()->microposts()->create([
    //         'content' => $request->content,
    //     ]);

    //     return redirect()->back();
    // }
}
