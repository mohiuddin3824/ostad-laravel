<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResponseController extends Controller
{
    function dataType(){
        return "hello";
    }

    function arrayShow(){
        $arr = ["Dhaka", "Bangladesh", "Khulna"];

        $asso = [
            [
                "name"=> "Mohiuddin",
                "age"=> 28,
                "address"=> "Dhaka, Bangladesh",
            ],
            [
                "name"=> "jannat",
                "age"=> 1,
                "address"=> "Ramgonj, lakshmipur",
            ]
        ];
        return $asso;
    }

    function jsonResponse():JsonResponse{
        $assArray = [
            [
                "name"=> "jannat",
                "age"=> 1,
                "address"=> "ramgonj, lakshmipur",
            ],
            [
                "name"=> "ariba",
                "age"=> 2,
                "address"=> "ramgonj, lakshmipur",
            ]
        ];
        return response()->json(["status"=>"success", "data"=>$assArray],200);
    }

    function redirect(){
        return redirect("/data-type");
    }

    function binaryPath():BinaryFileResponse{
        $path = "images/image-one.jpg";
        return response()->file($path);
    }

    function cocki(){
        $name = "mwt";
        $value = "mwt-23455";
        $expTime = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        return response("cocki set success")->cookie($name, $value, $expTime, $domain, $secure, $httpOnly);
    }

    function cocki2(){
        $name = "mwt";
        $value = "mwt-23455";
        $expTime = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        return response("cocki set success")
         ->header("name", "mwt")
         ->header("name2", "mwt value 2")
         ->header("name2", "mwt value 3");
    }
}
