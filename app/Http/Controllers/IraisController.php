<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

use App\Comment;

use App\Chat;

class IraisController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $irais = $user->feed_irais_alive();
            
            $data = [
                'user' => $user,
                'irais' => $irais,
            ];
            $data += $this->counts($user);
            
            return view('irais.index', $data);
        }else {
            return view('welcome');
        }
        
    }
    
    public function create()
    {
        $irai = new Irai;
        
        
        return view('irais.create', [
            'irai' => $irai,
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required|max:191',
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
            'finish' => 'nullable|date|after:start',
                    
        ]);

        $request->user()->irais()->create([
            'title' => $request->title,
            'content' => $request->content,
            'start' => $request->start,
            'finish' => $request->finish,
            'station' => $request->station,
            'reward' => $request->reward,
        ]);
        
        $user = \Auth::user();
        // $irais = Irai::all();
        $irais = $user->feed_irais_alive();

        return view("irais.index",
              ['irais' => $irais]);
                
    }
    
    
    public function show($id)
        {
            $irai = Irai::find($id);
            $user = User::find($id);
            $comments = Comment::all();
            
            if ($irai == null) {
                return view('irais.error');


            } else { 
                return view('irais.show', [
                    'irai'     => $irai,
                    'user'     => $user,
                    'comments' => $comments,
                    ]);
            }
    }
    
    
  
            

    
     public function edit($id)
        {
            $irai = \App\Irai::find($id);
            if (\Auth::user()->id === $irai->user_id) {
            return view('irais.edit', [
                'irai' => $irai,
            ]);
        }else {
            return redirect("/");
            }
        
        }
    
    public function update(Request $request, $id)
    {
      
        
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required|max:191',
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
            'finish' => 'nullable|date|after:start'
        ]);

        
        $irai = Irai::find($id);
        $irai->title = $request->title;
        $irai->content = $request->content;
        $irai->start = $request->start;
        $irai->finish = $request->finish;
        $irai->station = $request->station;
        $irai->reward = $request->reward;
        $irai->save();

        $user = \Auth::user();
        // $irais = Irai::all();
        $irais = $user->feed_irais_alive();

        return view("irais.index",
              ['irais' => $irais]);
    }
    
    public function destroy($id)
    {
        
        $irai = Irai::find($id);
        
        if (\Auth::id() === $irai->user_id) {
            
        $irai = \App\Irai::find($id);
        $irai->delete();
        

        $irais = Irai::orderBy('created_at', 'desc')->paginate(8);

       return redirect()->route('irais.index', ['irais' => $irais]);
        

      }  
    }

    public function thankyou($id)
    {
        
        $irai = Irai::find($id);
        $chats = Chat::orderBy('created_at', 'desc')->paginate(8);

        return view('irais.thankyou', [
            'irai' => $irai,
            'chats' => $chats,
        ]);
         
    }
 
}

