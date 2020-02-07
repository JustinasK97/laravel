<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category(){
        return view('skelbimai.pages.category');
    }

    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
           'title' => 'required'
        ]);
        $category = Category::create([
            'title' => request('title'),
        ]);
        return redirect('/categories');
    }
    public function categories()
    {
        $categories = Category::all();
        return view('skelbimai.pages.categories', compact('categories'));
    }
    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}
