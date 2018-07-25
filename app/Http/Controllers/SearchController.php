<?php

namespace App\Http\Controllers;

use Request;

use App\Irai;

use App\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function iraisearch(){
    
    
    	
	$query = Request::get('q');
    
	$irais_s = [];
	
	if (!is_null($query)) {
	
		$irais = Irai::where('title', 'LIKE', "%$query%")
                         ->orWhere('station', 'LIKE', "%$query%")	
                         ->orWhere('finish', 'LIKE', "%$query%")
                         ->paginate(8);
                         
		$irais_s = $irais->where('alive', 1);
	}
	 
	
	  
	return view('irais.search',
	['irais' => $irais_s,
	]);
	
    } 
   
}   
