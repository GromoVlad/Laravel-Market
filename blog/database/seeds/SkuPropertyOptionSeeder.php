<?php

use Illuminate\Database\Seeder;

class SkuPropertyOptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('sku_property_option')->insert([
            [
                'property_option_id'    => 1,
                'sku_id'                => 1,
                'created_at'            => date_create(),
                'updated_at'            => date_create(),
            ],
            [
                'property_option_id'    => 6,
                'sku_id'                => 1,
                'created_at'            => date_create(),
                'updated_at'            => date_create(),
            ],
            [
                'property_option_id'    => 1,
                'sku_id'                => 2,
                'created_at'            => date_create(),
                'updated_at'            => date_create(),
            ],
            [
                'property_option_id'    => 7,
                'sku_id'                => 2,
                'created_at'            => date_create(),
                'updated_at'            => date_create(),
            ]
        ]);
    }
}
