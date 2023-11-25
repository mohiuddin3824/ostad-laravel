<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    function sayHi(){
        return ("Welcome to first laravel practice");
    }

    function welcome(){
        return("Welcome to CMT Batch 5");
    }
    
    function greet($name = "Mohiuddin"){
        return("Hello $name ");
    }

    function samplePost(Request $request){
        return $request->input("name");
    } 

    function sampleGetPost(Request $request){
        
        return "<form method='POST' action='/form'>
            <input type='text' name='name'>
            <input type='submit' value='submit'>
        </form>";
    } 

}
