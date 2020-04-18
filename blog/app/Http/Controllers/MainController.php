<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Http\Requests\ProductsFilterRequest;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        $productsQuery = Product::with('category');

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        foreach (['new', 'hit', 'recommend'] as $field) {
            if ($request->has($field)) {
                $productsQuery->$field();
            }
        }
        $products = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());
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
        $product = Product::withTrashed()->where('code', $codeProduct)->first();
        return view('product', compact('product'));
    }

}
