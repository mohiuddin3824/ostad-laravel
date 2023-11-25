<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function getPerson(Request $request, $name="mohiuddin"){
        $display = $request->input("salman khan");
        return response("Hello {$name} - {$display}", 200);
    }
    function getstudent(Request $request, $student=1254){
        return response("Hello {$student}", 200);
    }
    function getstudentNew(Request $request, $some=1254){
        return response("Hello {$some}", 200);
    }
    function personAccount(Request $request, $iam = null, $id = null ) {
        return response("Hello {$iam}, your id is: {$id}", 200);
    }

    function personForm(){
        return view("person");
    }
    function createAPerson(Request $request){
        $name = $request->input("name");
        $email = $request->input("email");
        $image = $request->input("image");

        if ($image) {
            $imgName = time() ."-". $image->getClientOriginalName();
            $image->save(public_path("images"), $imgName);
        }else {
            $imgName = null;
        }

        return view("personview", ["name"=> $name,"email"=> $email, "image"=> $imgName]);

        //return response("Person {$name} create with {$email}", 200);
    }

    function middle(){
        return "Hello world";
    }
    function middle2(){
        return "Hello world";
    }
    
}
