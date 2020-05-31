<?php

use App\Model\Sku;
use Illuminate\Database\Seeder;

class SkusSeeder extends Seeder
{
    public function run()
    {
        Sku::insert([
            [
                'product_id'    => 1,
                'count'         => rand(1, 10),
                'price'         => 71000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 1,
                'count'         => rand(1, 10),
                'price'         => 73000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 2,
                'count'         => rand(1, 10),
                'price'         => 12000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 3,
                'count'         => rand(1, 10),
                'price'         => 30000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 4,
                'count'         => rand(1, 10),
                'price'         => 15000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 5,
                'count'         => rand(1, 10),
                'price'         => 17000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 6,
                'count'         => rand(1, 10),
                'price'         => 42000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 7,
                'count'         => rand(1, 10),
                'price'         => 50000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 8,
                'count'         => rand(1, 10),
                'price'         => 39900,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 9,
                'count'         => rand(1, 10),
                'price'         => 7500,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 10,
                'count'         => rand(1, 10),
                'price'         => 6000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
        ]);
    }
}
