<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware;

Route::get('/', function (){
    return view("welcome");
});

// Route::get('/hello', function () {
//     return view('hello');
// });

// route::redirect("/hello", "/");

// Route::get('/ankit', function() {
//     return view('ankit');
// });

// // Route::get("/home", function () {
// //     return view('home');
// // });

// //Another way to write 
// Route::view('/home', 'home');

// Route::get('/about/{name}', function($name){
//     // echo $name;
//     return view('about', [ 'name' => $name]);
// });

// Route::get('user', [UserController::class, 'getUser']);

// Route::get('user/about', [UserController::class, 'aboutUser']);

// Route::get('ankit/{name}', [UserController::class, 'getUsers']);

// Route::get('admin', [UserController::class, 'adminLogin']);

Route::get('/test/{name}',[UserController::class, 'testUser']);

// Route::get('/user', function(){
//     return view('user');
// });

Route::get('/about', function(){
    return view('about');
});

Route::get('hello/{name}/{age}/{reg}', function($name, $age, $reg){
    // return view('hello', ["name"=> $name, "age"=> $age]);
    return "hello ". $name. " your are ".$age." years old, reg no ". $reg;
});

Route::get('/user', function(){
    return view('user')->with('name', 'Radhe Radhe');
});


Route::get('lapse/{name}', [UserController::class, 'helloUser']);

Route::get('admin', function (){
    return "Admin pannel";

})-> middleware(CheckRole::class);




