<?php

use Illuminate\Database\Seeder;

class OrderSkuSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_sku')->insert([
            [
                'order_id'      => 1,
                'sku_id'        => 2,
                'count'         => 4,
                'price'         => 73000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'order_id'      => 2,
                'sku_id'        => 5,
                'count'         => 1,
                'price'         => 15000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'order_id'      => 2,
                'sku_id'        => 6,
                'count'         => 1,
                'price'         => 17000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
        ]);
    }
}
