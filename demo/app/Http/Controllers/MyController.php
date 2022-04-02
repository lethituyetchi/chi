<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('register');
    }
    function register(Request $request){
        $request->flash();
        echo "Name:".$request->old('tname');
        }
}
