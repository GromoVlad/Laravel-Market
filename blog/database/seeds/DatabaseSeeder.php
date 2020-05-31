<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PropertiesSeeder::class);
        $this->call(PropertyOptionsSeeder::class);
        $this->call(PropertyProductSeeder::class);
        $this->call(SkusSeeder::class);
        $this->call(SkuPropertyOptionSeeder::class);
        $this->call(OrderSkuSeeder::class);
    }
}
