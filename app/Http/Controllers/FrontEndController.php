<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view("frontend.index");
    }

    function aboutMe(){
        return view("frontend.pages.about-me");
    }

    function projects(){
        return view("frontend.pages.projects");
    }
    
    function contact(){
        return view("frontend.pages.contact");
    }
}

