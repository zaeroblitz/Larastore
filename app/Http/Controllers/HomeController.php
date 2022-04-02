<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{   
    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with('galleries')->orderBy('created_at', 'desc')->take(8)->get();
        return view('pages.home',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}