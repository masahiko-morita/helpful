<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_irais = $user->irais()->count();
        $count_finishings = $user->finishings()->count();
        $count_helpings = $user->helpings()->count();
        $count_finished = $user->finished()->count();
       
     
        
        return [
            'count_irais' => $count_irais,
            'count_finishings' => $count_finishings,
            'count_helpings' => $count_helpings,
            'count_finished' => $count_finished,
          
        ];
    }
    
}
