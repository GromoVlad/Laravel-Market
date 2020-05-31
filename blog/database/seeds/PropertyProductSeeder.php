<?php

use Illuminate\Database\Seeder;

class PropertyProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('property_product')->insert([
            [
                'product_id'    => 1,
                'property_id'   => 1,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 1,
                'property_id'   => 2,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 2,
                'property_id'   => 1,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 2,
                'property_id'   => 2,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 3,
                'property_id'   => 1,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 3,
                'property_id'   => 2,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'product_id'    => 4,
                'property_id'   => 2,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ]
        ]);
    }
}
