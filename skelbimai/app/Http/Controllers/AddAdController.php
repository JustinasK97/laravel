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
    public function storeAd(Request $request, Ad $ad)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required',
            'img' => 'mimes:jpeg, jpg, png, gift|required|max:10000'
        ]);

        $path = $request->file("img")->store("public/images");
        $filename = str_replace("public/", "", $path);

        $ad = Ad::create([
            'title' => request('title'), //name
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'catid' => request('catid'),
            'location' => request('location'),
            'img'=>$filename

        ]);

        return redirect('/adsList');

    }
    public function adsList()
    {
        $ads = Ad::all();
        $categories = Category::all();
        return view('skelbimai.pages.edit_ad',compact('ads','categories'));

    }

    public function deleteAd(Ad $ad)
    {
        $ad->delete();
        return redirect('/adsList');
    }

    public function editAd(Ad $ad){

        $categories = Category::all();
        return view ('skelbimai.pages.editAd', compact('ad', 'categories'));

    }

    public function update_ad(Request $request, Ad $ad){

//        dd($ad);

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
        ]);

        Ad::where('id', $ad->id )
            ->update(['title' => request('title'),
                'description' => request('description'),
                'price' => request('price'),
                'email' => request('email'),
                'phone' => request('phone'),
                'location' => request('location'),
            ]);


        return redirect('/adsList');

    }

    public function search(Request $request){

        $ads = Ad::where('title', 'LIKE', '%'.request('titleForSearch').'%')->
        where('location', 'LIKE', '%'.request('locationForSearch').'%')->
        where('catid', 'LIKE', '%'.request('catid').'%')->get();
        return view ('skelbimai.pages.search', compact('ads'));
    }
}
