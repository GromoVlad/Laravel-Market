<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name'    => 'Мобильные телефоны',
            'code' => 'mobiles',
            'description' => 'В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!',
        ]);

        Category::insert([
            'name'    => 'Портативная техника',
            'code' => 'portable',
            'description' => 'Раздел с портативной техникой.',
        ]);

        Category::insert([
            'name'    => 'Бытовая техника',
            'code' => 'appliances',
            'description' => 'Раздел с бытовой техникой',
        ]);
    }
}
