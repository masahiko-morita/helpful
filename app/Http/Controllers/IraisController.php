<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irai;
use App\User;

class IraisController extends Controller
{
    public function index()
    {
        // $data = [];
        // // if (\Auth::check()) {
        //     // $user = \Auth::user();
        //     $irais = irais()->orderBy('created_at', 'desc')->paginate(10);

        //     $data = [
        //         // 'user' => $user,
        //         'irais' => $irais,
        //     ];
        //     // $data += $this->counts($user);
        //     return view('users.show', $data);
        // // }else {
        // //     return view('welcome');
        // // }
        
        $irais = Irai::all();

        return view('irais.index', [
            'irais' => $irais,
        ]);
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
            'timespan' => 'required|max:50',
            'station' => 'required|max:20',
            'reward' => 'required|max:50',
            'comment' => 'required|max:50',
                    
        ]);

        // $request->user()->irais()->create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'timespan' => $request->timespan,
        //     'station' => $request->station,
        //     'reward' => $request->reward,
        // ]);


        $irai = new Irai;
        $irai->title = $request->title;
        $irai->content = $request->content;
        $irai->timespan = $request->timespan;
        $irai->station = $request->station;
        $irai->reward = $request->reward;
        $irai->comment = $request->comment;
        $irai->save();
        // return redirect()->back();
        
         $irais = Irai::all();
        return view('irais.index', [
            'irais' => $irais,
        ]);
    }
    
    
    public function show($id)
        {
            // $user = User::find($id);
            // $irai = Irai::find($id);
            // // $irais = \DB::table('irais')->join('category_masters','irais.category_id', '=', 'category_masters.id')->select('category_masters.*')->get();
            
            
            // if ($irai->user_id){
            //     return view('irais.show', [
            //         // 'user' => $user,
            //         'irai' => $irai,
            //     ]);
            // }else {
            //     return redirect("/");
            // }
            
        $irai = Irai::find($id);

        return view('irais.show', [
            'irai' => $irai,
        ]);
        }
    
     public function edit($id)
        {
        //     $irai = \App\Irai::find($id);
        //     if (\Auth::user()->id === $irai->user_id) {
        //     return view('irais.edit', [
        //         'irai' => $irai,
        //     ]);
        // }else {
        //     return redirect("/");
        //     }
        
        $irai = Irai::find($id);

        return view('irais.edit', [
            'irai' => $irai,
        ]);
        }
    
    public function update(Request $request, $id)
    {
      
        
        $this->validate($request, [
            
        ]);

        
        $irai = Irai::find($id);
        $irai->title = $request->title;
        $irai->content = $request->content;
        $irai->timespan = $request->timespan;
        $irai->station = $request->station;
        $irai->reward = $request->reward;
        $irai->comment = $request->comment;
        $irai->save();

        return redirect('/');
    }
    
    public function destroy($id)
    {
    //     if (\Auth::id() === $irai->user_id) {
            
    //     $irai = \App\Irai::find($id);
    //     $irai->delete();

    //     return redirect()->back();
    // }
        $irai = Irai::find($id);
        $irai->delete();

        return redirect('/');
    }

    public function thankyou($id)
    {
        
        $irai = Irai::find($id);

        return view('irais.thankyou', [
            'irai' => $irai,
        ]);
         
    }

}

