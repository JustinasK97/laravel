<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddAdController extends Controller
{

    public function addAd(){
        return view('skelbimai.pages.addAd');
    }
}
