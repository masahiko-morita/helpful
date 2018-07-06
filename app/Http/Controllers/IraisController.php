<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;

use App\User;

class IraisController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $irais = $user->irais()->orderBy('created_at', 'desc')->paginate(10);

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
            'start' => 'required|max:50',
            'finish' => 'required|max:50',
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
            'comment' => 'required|max:50',
                    
        ]);

        $request->user()->irais()->create([
            'title' => $request->title,
            'content' => $request->content,
            'start' => $request->start,
            'finish' => $request->finish,
            'station' => $request->station,
            'reward' => $request->reward,
            'comment' => $request->comment,            
            
        ]);
        
        $irais = Irai::all();

        return view("irais.index",
              ['irais' => $irais]);
                
    }
    
    
    public function show($id)
        {
            $irai = Irai::find($id);
            
             return view('irais.show', [
                'irai' => $irai,
          
           ]);
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
            'start' => 'required|max:50',
            'finish' => 'required|max:50',
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
            'comment' => 'required|max:50',
        ]);

        
        $irai = Irai::find($id);
        $irai->title = $request->title;
        $irai->content = $request->content;
        $irai->start = $request->start;
        $irai->finish = $request->finish;
        $irai->station = $request->station;
        $irai->reward = $request->reward;
        $irai->comment = $request->comment;
        $irai->save();

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $irai = Irai::find($id);
        if (\Auth::id() === $irai->user_id) {
            
        $irai = \App\Irai::find($id);
        $irai->delete();

        return redirect("/");
        

      }  
    }

    public function thankyou($id)
    {
        
        $irai = Irai::find($id);

        return view('irais.thankyou', [
            'irai' => $irai,
        ]);
         
    }

}

