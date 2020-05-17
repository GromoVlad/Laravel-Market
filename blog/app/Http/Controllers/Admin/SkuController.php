<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkuRequest;
use App\Model\Product;
use App\Model\Sku;

class SkuController extends Controller
{
    public function index(Product $product)
    {
        $skus = $product->skus()->paginate(10);
        return view('auth.skus.index', compact('product', 'skus'));
    }

    public function create(Product $product)
    {
        return view('auth.skus.formCreate', compact('product'));
    }

    public function store(SkuRequest $request, Product $product)
    {
        $params = $request->all();
        $params['product_id'] = $request->product->id;
        $skus = Sku::create($params);
        $skus->propertyOptions()->sync($request->property_id);
        return redirect()->route('skus.index', $product);
    }

    public function show(Product $product, Sku $skus)
    {
        return view('auth.skus.show', compact('product', 'skus'));
    }

    public function edit(Product $product, Sku $skus)
    {
        return view('auth.skus.formUpdate', compact('product', 'skus'));
    }

    public function update(SkuRequest $request, Product $product, Sku $skus)
    {
        $params = $request->all();
        $params['product_id'] = $request->product->id;
        $skus->update($params);
        $skus->propertyOptions()->sync($request->property_id);
        return redirect()->route('skus.index', $product);
    }

    public function destroy(Product $product, Sku $skus)
    {
        $skus->delete();
        return redirect()->route('skus.index', $product);
    }
}
