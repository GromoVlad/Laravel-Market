<?php

use App\Model\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::insert([
            [
                'code' => 'RUB',
                'symbol' => '₽',
                'is_main' => 1,
                'rate' => 1,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'code' => 'USD',
                'symbol' => '$',
                'is_main' => 0,
                'rate' => 0,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'code' => 'EUR',
                'symbol' => '€',
                'is_main' => 0,
                'rate' => 0,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
        ]);
    }
}
