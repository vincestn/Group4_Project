<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller{

    //needs adjustment
    public function welcome(){
        return view('welcome');
    }
    
    public function index(){
        return view('index');
    }
    
    public function main(){
        return view('main');
    }
    
    public function postSymp(){
        return view('postSymp');
    }
    
}
