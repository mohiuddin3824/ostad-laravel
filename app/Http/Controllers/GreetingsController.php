<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    function sayHi(Request $request, $name="name"){
        print_r ($request->all());
    }

    function onlyHi(Request $request){
        return "hi";
    }

    function protectedResponse(Request $request){
        $ip = $request->ip();
        return response("Protected area {$ip}");
    }

}
