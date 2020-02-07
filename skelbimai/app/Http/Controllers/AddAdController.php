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
    public function storeAd(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required'
        ]);
        $ad = Ad::create([
            'catid' => request('catid'),
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'location' => request('location')
        ]);
        return redirect('/adsList');
    }
    public function adsList()
    {
        $ads = Ad::all();
        return view('skelbimai.pages.adsList', compact('ads'));
    }
    public function deleteAd(Ad $ad)
    {
        $ad->delete();
        return redirect('/adsList');
    }
}
