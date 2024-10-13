<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gridphp;

class HomeController extends Controller
{
    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function registerForm(){
        return view('home.register');
    }

    public function loginForm(){
        return view('home.login');
    }
}
