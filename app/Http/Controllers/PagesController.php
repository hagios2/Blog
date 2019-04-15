<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){

        $tasks = [
            'Go to the Storer', 
            'Go to the market', 
            'Go to Church'
        ];
    
        return view('welcome', [
            'tasks' => $tasks ]);
    }

    public function contact(){
        
        return view ('contact');
    }

    public function about(){

        return view('about');
    }
}
