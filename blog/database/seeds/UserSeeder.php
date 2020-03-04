<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'    => 'Администратор',
            'email' => 'ad@min',
            'password' => bcrypt('12345678'),
            'is_admin' => 1,
        ]);

        User::insert([
            'name'    => 'Влад',
            'email' => 'vlad@a',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);

        User::insert([
            'name'    => 'Ольга',
            'email' => 'olya@a',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);
        User::insert([
            'name'    => 'Борис',
            'email' => 'boris@a',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);
    }
}
