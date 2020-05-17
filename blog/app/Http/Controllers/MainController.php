<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Model\Currency;
use App\Model\Sku;
use App\Model\Subscription;
use App\Model\Category;
use App\Model\Product;
use App\Http\Requests\ProductsFilterRequest;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        $skusQuery = Sku::with(['product', 'product.category']);
        if ($request->filled('price_from')) {
            $skusQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')) {
            $skusQuery->where('price', '<=', $request->price_to);
        }
        foreach (['new', 'hit', 'recommend'] as $field) {
            if ($request->has($field)) {
                $skusQuery->wherehas(
                    'product',
                    function ($query) use ($field) {
                        $query->$field();
                    }
                );
            }
        }
        $skus = $skusQuery->paginate(6)->withPath("?" . $request->getQueryString());
        return view('index', compact('skus'));
    }

    public function categories()
    {
        return view('categories');
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function sku($categoryCode, $productCode, Sku $skus)
    {
        if ($skus->product->code !== $productCode) {
            abort(404, 'Продукт не найден');
        }
        if ($skus->product->category->code !== $categoryCode) {
            abort(404, 'Категория не найдена');
        }
        return view('product', compact('skus'));
    }

    public function subscribe(SubscriptionRequest $request, Sku $skus)
    {
        Subscription::create([
            'email' => $request->email,
            'sku_id' => $skus->id,
        ]);

        return redirect()->back()->with('success', __('main.thank'));
    }

    public function changeLocale($locale)
    {
        $availableLocales = ['ru', 'en'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }
}
