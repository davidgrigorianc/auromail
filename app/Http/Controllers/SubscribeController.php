<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;


class SubscribeController extends Controller
{
    public function subscribe(Request $request){
    	 $validatedData = $request->validate([
	        'first_name' => 'required|max:255|min:3',
	        'last_name' => 'required|max:255|min:3',
	        'email' => 'required|email|max:255'
	    ]);
    	if ( ! Newsletter::isSubscribed($validatedData['email']) ) {  
    		Newsletter::subscribe($validatedData['email'], ['FNAME'=>$validatedData['first_name'], 'LNAME'=>$validatedData['last_name']]);
    		if(Newsletter::lastActionSucceeded()){
    			return back()->with('success',"You'r subscibed successfully");
    		}
    		return back()->with('error',"Something wrong");
    	}
		return back()->with('info','You\'r already subscibed');


    	
    }
}
