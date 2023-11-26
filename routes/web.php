<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hi',[OstadController::class, 'sayHi'])->name('hi');


Route::get('/greet/{name?}', [OstadController::class, 'greet']);

Route::post("/form", [OstadController::class, 'samplePost']);
Route::get("/form", [OstadController::class, 'sampleGetPost']);

Route::get('/weather/{location}', [WeatherController::class, 'WeatherDetails']);

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/person/{name?}', [PersonController::class, 'getPerson']);

// We can force alpha or numeric
Route::get('/person/{name?}', [PersonController::class, 'getPerson'])->whereAlpha('name');
Route::get('/student/{id?}', [PersonController::class, 'getstudent'])->whereNumber('id');
Route::get('/alpanum/{some?}', [PersonController::class, 'getstudentNew'])->whereAlphaNumeric('some');


Route::get('/iam/{iam?}/{id?}', [PersonController::class, 'personAccount'])->whereAlpha('iam')->whereNumber('id');

Route::get("/persons", [PersonController::class, "personForm"]);

Route::post("/persons", [PersonController::class, "createAPerson"]);

// Request response practice

Route::get("/data-type", [ResponseController::class, "dataType"]);

Route::get("/array", [ResponseController::class, "arrayShow"]);

Route::get("/json-response", [ResponseController::class,"jsonResponse"]);

Route::get("/redirect", [ResponseController::class, "redirect"]);

Route::get("/binary-path", [ResponseController::class, "binaryPath"]);

Route::get("/cocki", [ResponseController::class, "cocki"]);
Route::get("/cocki2", [ResponseController::class, "cocki2"]);

 Route::get('/restrict', function () {
     return "Hello world!";
})//->middleware("simple");
->middleware('throttle:5,1');

//Route Group

Route::middleware(["simple"])->group(function () {
    Route::get("middleman", [PersonController::class, 'middle']);
    Route::get("jum", [PersonController::class, 'middle2']);
});

Route::get('/sayhi/{name?}', [GreetingsController::class,'sayHi'])->middleware('addTitle');

Route::get('/onlyhi', [GreetingsController::class,'onlyHi'])->middleware('simple_response');
Route::get('/protected', [GreetingsController::class,'protectedResponse'])->middleware('protected');

// Assignment modiule nine

Route::get('/', [FrontEndController::class, 'index'])->name('index');

Route::get('/about-me', [FrontEndController::class, 'aboutMe'])->name('aboutMe');

Route::get('/projects', [FrontEndController::class, 'projects'])->name('projects');

Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');