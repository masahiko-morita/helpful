<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Irai;

use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $irais = Irai::orderBy('updated_at', 'desc')->paginate(4);
        return view('welcome', [
            'irais' => $irais,
        ]);
        
    }
}