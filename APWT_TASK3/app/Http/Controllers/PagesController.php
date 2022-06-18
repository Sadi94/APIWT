<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;

class PagesController extends Controller
{
    //
    public function home(){
        return view('home');

    }

    public function products(){
        $products=array("Medicine", "HoPd", "PSant");
        return view('products')
        ->with('products', $products);;
    }

    public function teams(){
        $teams=array("Mr. X", "Mr. X", "Mr. X");
        return view('teams')
        ->with('teams', $teams);;
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUsSubmit(Request $request){
        $validate=$request->validate([
            
            'email'=>'required',
            'message'=>'required',
     
        ],

        [
            'email.required'=>'Please put your mail',
            'message.required'=>'Please put your message',
           

        ]
    );
        //return view('contactUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
          
}