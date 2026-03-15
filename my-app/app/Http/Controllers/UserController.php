<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    function getUser(){
        $a=2;
        $b=3;
        $c=$a+$b;
        return view('user', ['name'=>"Ankit kumar", 'sum'=> $c]);
    }

    function aboutUser(){
        return view('about', ['message'=>"Hello this is ankit kumar a web devolper enthusiast"]);
    }

    function getUsers($name){
        return "this is ". $name;
    }

}





