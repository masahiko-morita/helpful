<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IraisController extends Controller
{
    public function index()
    {
        $data = [];
<<<<<<< HEAD
        if (\Auth::check()) {
            $user = \Auth::user();
            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'microposts' => $microposts,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
=======
        // if (\Auth::check()) {
            // $user = \Auth::user();
            $irais = $user->irais()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                // 'user' => $user,
                'irais' => $irais,
            ];
            // $data += $this->counts($user);
            return view('users.show', $data);
        // }else {
        //     return view('welcome');
        // }
    }
    
    public function create()
    {
        $irai = new Irai;
        
        return view('irais.create', [
            'irai' => $irai,
        ]);
>>>>>>> 59b7cf5d9a80bd9ecdf76b285a8687bb9a5819b8
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required|max:191',
            'timespan' => 'required|max:50',
<<<<<<< HEAD
    //         'station' => 'required|max:20',
                'reward' => 'required|max:50',
                    
        ]);

        $request->user()->microposts()->create([
            'content' => $request->content,
        ]);
=======
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
                    
        ]);

        $request->user()->irais()->create([
            'title' => $request->title,
            'content' => $request->content,
            'timespan' => $request->timespan,
            'station' => $request->station,
            'reward' => $request->reward,
        ]);

        return redirect()->back();
    }
    
    
    
    
    public function destroy($id)
    {
        $irai = \App\Irai::find($id);

        // if (\Auth::id() === $irai->user_id) {
            
        // }
        $irai->delete();
>>>>>>> 59b7cf5d9a80bd9ecdf76b285a8687bb9a5819b8

        return redirect()->back();
    }
}


