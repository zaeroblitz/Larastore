<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DashboardProductController extends Controller
{
    public function index() 
    {
        $products = Product::with(['galleries', 'category'])->where('users_id', Auth::user()->id)->get();
        return view('dashboard.products', [
            'products' => $products
        ]);
    }

    public function create() 
    {
        $categories = Category::all();
        return view('dashboard.products-create', [
            'categories' => $categories
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $product = Product::create($data);

        /* $photos = $request->photo;

        foreach ($photos as $photo) {
            
        }      */
        
        $gallery = [
            'products_id' => $product->id,
            'photo' => $request->file('photos')->store('assets/products/', 'public')
        ];

        ProductGallery::create($gallery);

        return redirect()->route('dashboard-products');
        // return dd($photos);
    }

    public function details(Request $request, $id) 
    {
        $product = Product::with((['galleries','user','category']))->findOrFail($id);
        $categories = Category::all();

        return view('dashboard.products-details', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $item = Product::findOrFail($id);
        $item->update($data);

        return redirect()->route('dashboard-products');
    }

    public function uploadPhoto(Request $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/products/', 'public');

        ProductGallery::create($data);

        return redirect()->route('dashboard-products-details', $request->products_id);
    }

    public function deletePhoto(Request $request, $id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard-products-details', $item->products_id);
    }
}