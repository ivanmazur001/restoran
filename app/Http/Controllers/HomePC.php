<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meals;


class HomePC extends Controller
{
  public function index()
          {
        
        $meals = meals::all();      
   
              
         return view('homePG', [
             'meals' => $meals
                 
         ]);
          }  
}
