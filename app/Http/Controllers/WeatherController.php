<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    function WeatherDetails($location){
        $weatherData = Http::get("https://wttr.in/{$location}?format=j1")->json();
        $current_temp = $weatherData["current_condition"][0]["temp_C"];
        $weatherDesc = $weatherData["current_condition"][0]["weatherDesc"][0]["value"];
        return view('weather', compact('location', 'current_temp', 'weatherDesc'));
    }
}
