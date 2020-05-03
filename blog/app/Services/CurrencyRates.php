<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class CurrencyRates
{
    public static function getRates()
    {
        $baseCurrency = CurrencyConversion::getCurrency();
        $url = config('currency_rates.api_url') . $baseCurrency->code;
        $client = new Client();

        $response = $client->request('GET', $url);
        if ($response->getStatusCode() !== 200) {
            throw new Exception('Есть проблема с обновлением курсов валют');
        }
        $rates = json_decode($response->getBody()->getContents(), true)['rates'];

        foreach (CurrencyConversion::getCurrencies() as $currency) {
            if (!$currency->isMain()) {
                if (!isset($rates[$currency->code])) {
                    throw new Exception('Есть проблема с обновлением курсов валют' . $currency->code);
                } else {
                    $currency->update(['rate' => $rates[$currency->code]]);
                    $currency->touch();
                }
            }
        }
    }
}
