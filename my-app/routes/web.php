<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function (){
    return view("welcome");
});

// Route::get('/hello', function () {
//     return view('hello');
// });

route::redirect("/hello", "/");

Route::get('/ankit', function() {
    return view('ankit');
});

// Route::get("/home", function () {
//     return view('home');
// });

//Another way to write 
Route::view('/home', 'home');

Route::get('/about/{name}', function($name){
    // echo $name;
    return view('about', [ 'name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']);

Route::get('user/about', [UserController::class, 'aboutUser']);

Route::get('user/{name}', [UserController::class, 'getUsers']);

