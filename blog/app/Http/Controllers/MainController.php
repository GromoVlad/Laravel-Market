<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category, $codeProduct)
    {
        $product = Product::where('code', $codeProduct)->first();
        return view('product', compact('product'));
    }

}
