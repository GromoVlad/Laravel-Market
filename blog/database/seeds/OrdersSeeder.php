<?php

use Illuminate\Database\Seeder;
use App\Model\Order;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            'status'     => '1',
            'name'       => 'Vlad',
            'phone'      => '8999777888555',
            'user_id'    => '2',
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        Order::insert([
            'status'     => '1',
            'name'       => 'Vlad',
            'phone'      => '8999777555111',
            'user_id'    => '2',
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        Order::insert([
            'status'     => '1',
            'name'       => 'Vlad',
            'phone'      => '8999777555444',
            'user_id'    => '2',
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        Order::insert([
            'status'     => '1',
            'name'       => 'Olya',
            'phone'      => '3262756854',
            'user_id'    => '3',
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);

        Order::insert([
            'status'     => '1',
            'name'       => 'Olya',
            'phone'      => '2352687689',
            'user_id'    => '3',
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}