<?php

use Illuminate\Database\Seeder;
use App\Model\Order;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        Order::insert([
            [
                'status'        => 1,
                'name'          => 'Vlad',
                'email'         => 'Vlad@mail.ru',
                'phone'         => '89997788855',
                'user_id'       => 2,
                'currency_id'   => 1,
                'sum'           => 292000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'status'        => 1,
                'name'          => 'Olya',
                'email'         => 'Olya@yandex.ru',
                'phone'         => '89097228345',
                'user_id'       => 3,
                'currency_id'   => 1,
                'sum'           => 32000,
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
        ]);
    }
}
