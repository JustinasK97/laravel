<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('skelbimai.pages.home');
    }

    public function ads(){
        return view('skelbimai.pages.ads');
    }

    public function ad(){
        return view('skelbimai.pages.ad');
    }

    public function info(){
        return view('skelbimai.pages.info');
    }

    public function contact(){
        return view('skelbimai.pages.contact');
    }

    public function login(){
        return view('skelbimai.pages.login');
    }

    public function register(){
        return view('skelbimai.pages.register');
    }

}