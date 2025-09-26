<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request){
        if($request->user()->role=='user'){
            return view('home.homepage');
        }
        else{
            return redirect()->route('admin.dashboard');
        }
    }
    public function index(Request $request){
        if($request->user()->role=='admin'){
            return view('admin.dashboard');
        }
        else{
            return redirect()->route('dashboard');
        }
    }
    public function post(){
        return view('admin.post');
    }
    public function createpost(){
        return view('admin.createpost');
    }
    public function homepage(){
        return view('home.homepage');
    }
    
};
