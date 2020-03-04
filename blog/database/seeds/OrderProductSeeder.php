<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            'order_id'   => 1,
            'product_id' => 1,
            'count'      => 1,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 1,
            'product_id' => 2,
            'count'      => 2,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 1,
            'product_id' => 5,
            'count'      => 3,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 2,
            'product_id' => 11,
            'count'      => 2,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 2,
            'product_id' => 10,
            'count'      => 2,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 2,
            'product_id' => 8,
            'count'      => 3,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 3,
            'product_id' => 4,
            'count'      => 2,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 3,
            'product_id' => 5,
            'count'      => 1,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 4,
            'product_id' => 1,
            'count'      => 1,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 4,
            'product_id' => 11,
            'count'      => 3,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 5,
            'product_id' => 4,
            'count'      => 1,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        DB::table('order_product')->insert([
            'order_id'   => 5,
            'product_id' => 2,
            'count'      => 1,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}