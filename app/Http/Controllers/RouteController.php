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
    
    public function postLN1(){
        return view('postLN1');
    }
    
    public function postLN2(){
        return view('postLN2');
    }
    
    public function postIN1(){
        return view('postIN1');
    }
    
    public function postIN2(){
        return view('postIN2');
    }
    
    public function postSymp(){
        return view('postSymp');
    }
    
}
