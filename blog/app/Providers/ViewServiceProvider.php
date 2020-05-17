<?php

namespace App\Providers;

use App\Services\CurrencyConversion;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer(['layout.master', 'categories'], 'App\ViewComposers\CategoriesComposer');
        View::composer(['layout.master'], 'App\ViewComposers\BestProductsComposer');
        View::composer(['layout.master',], 'App\ViewComposers\CurrenciesComposer');
        View::composer('*', function (\Illuminate\Contracts\View\View $view) {
            $currencySymbol = CurrencyConversion::getCurrencySymbol();
            $view->with('currencySymbol', $currencySymbol);
        });
    }
}
