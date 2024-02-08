<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    // function for load home page with db data
    public function index(){
        $message=Message::orderby('id','desc')->get();
        return view('Home')->with('messages',$message); 
       

    }

    // function for load message page with db data
    public function view(Message $message){        
        return view('message')->with('message',$message); 

    }

    // function for save data
    public function save(Request $request){  
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'name' => 'required',
        ]);
          
        Message::create($request->all());
        return redirect('/');
        
    }
   
}
