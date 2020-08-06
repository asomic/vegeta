<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Models
use App\Models\Product\Product;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.index',['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('product.show',['product' => $product]);
    }

    public function store(Request $request)
    {
        $product = new Product; 
        $product->name = $request->name;
       // $product->description = $request->description;
        $product->save();
        return redirect()->route('product.show',['product' => $product->id]);
    }

    public function galleryShow(Product $product)
    {
        return view('product.gallery',['product' => $product]);
    }

    public function documentShow(Product $product)
    {
        return view('product.document',['product' => $product]);
    }

}
