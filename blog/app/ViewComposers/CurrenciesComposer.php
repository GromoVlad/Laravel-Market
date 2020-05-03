<?php


namespace App\ViewComposers;

use App\Services\CurrencyConversion;
use Illuminate\Contracts\View\View;

class CurrenciesComposer
{
    public function compose(View $view)
    {
        $currencies = CurrencyConversion::getCurrencies();
        $view->with('currencies', $currencies);
    }
}
