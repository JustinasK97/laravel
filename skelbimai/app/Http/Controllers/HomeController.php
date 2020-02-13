<?php

namespace App\Http\Controllers;
use App\Category;
use App\Ad;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function home(){
        return view('skelbimai.pages.home');
    }

    public function showAds()
    {
        $categories = Category::all();
        $ads = Ad::select('ads.id', 'ads.title', 'ads.description','ads.price', 'ads.email','ads.phone',
            'ads.location','ads.catid','categories.title')->join('categories','categories.id',"=",'ads.catid')->paginate(2);
        return view('skelbimai.pages.skelbimai', compact('ads','categories'));
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