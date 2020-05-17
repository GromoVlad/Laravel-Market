<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use  App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('auth.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        $properties = Property::get();
        return view('auth.products.formCreate', compact('categories', 'properties'));
    }

    public function store(ProductRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }

        Product::create($params);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('auth.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        $properties = Property::get();
        return view('auth.products.formUpdate', compact('product', 'categories', 'properties'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }
        foreach (['new', 'hit', 'recommend'] as $fieldName) {
            if (!isset($params[$fieldName])) {
                $params[$fieldName] = 0;
            }
        }
        $product->properties()->sync($request->property_id);
        $product->update($params);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
