<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AddAdController extends Controller
{

    public function addAd(){
        $categories = Category::all();
        return view('skelbimai.pages.addAd', compact('categories'));
    }
}
