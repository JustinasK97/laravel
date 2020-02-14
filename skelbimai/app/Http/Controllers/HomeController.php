<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => ['edit']]);
    }

    public function logout()
    {
        Auth::logout();

        return view('skelbimai.pages.home');
    }


//    public function index(){
//
//        $categories = Category::all();
//        $ads = Ad::select('ads.id', 'ads.title','ads.img', 'ads.description','ads.price', 'ads.email','ads.phone',
//            'ads.location','ads.catid','categories.title')->join('categories','categories.id',"=",'ads.catid')->get();
//        return view('skelbimai.pages.home', compact('ads','categories'));
//    }
//
//    public function showAds()
//    {
//        $categories = Category::all();
//        $ads = Ad::select('ads.id', 'ads.title','ads.img', 'ads.description','ads.price', 'ads.email','ads.phone',
//            'ads.location','ads.catid','categories.title')->join('categories','categories.id',"=",'ads.catid')->paginate(4);
//        return view('skelbimai.pages.home', compact('ads','categories'));
//    }

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

    public function logout2()
    {
        Auth::logout();

        return redirect('/login');
    }
}