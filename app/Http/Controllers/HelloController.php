<?php


namespace App\Http\Controllers;


class HelloController extends Controller
{
    public function helloWorld(){
        return view('welcome');
    }
}
