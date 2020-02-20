<?php

use Illuminate\Database\Seeder;
use App\Model\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'name'    => 'iPhone X 64GB',
            'code' => 'iphone_x_64',
            'category_id' => 1,
            'image' => NULL,
            'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
            'price' => 71990,
        ]);

        Product::insert([
            'name'    => 'iPhone X 256GB',
            'code' => 'iphone_x_256',
            'category_id' => 1,
            'image' => NULL,
            'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
            'price' => 89990,
        ]); 

        Product::insert([
            'name'    => 'HTC One S',
            'code' => 'htc_one_s',
            'category_id' => 1,
            'image' => NULL,
            'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
            'price' => 12490,
        ]); 
        
        Product::insert([
            'name'    => 'iPhone 5SE',
            'code' => 'iphone_5se',
            'category_id' => 1,
            'image' => NULL,
            'description' => 'Отличный классический iPhone',
            'price' => 17221,
        ]);

        Product::insert([
            'name'    => 'Наушники Beats Audio',
            'code' => 'beats_audio',
            'category_id' => 2,
            'image' => NULL,
            'description' => 'Отличный звук от Dr. Dre',
            'price' => 17221,
        ]);

        Product::insert([
            'name'    => 'Камера GoPro',
            'code' => 'gopro',
            'category_id' => 2,
            'image' => NULL,
            'description' => 'Снимай самые яркие моменты с помощью этой камеры',
            'price' => 12000,
        ]);

        Product::insert([
            'name'    => 'Камера Panasonic HC-V770',
            'code' => 'panasonic_hc',
            'category_id' => 2,
            'image' => NULL,
            'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
            'price' => 27900,
        ]);

        Product::insert([
            'name'    => 'Кофемашина DeLongi',
            'code' => 'delongi',
            'category_id' => 3,
            'image' => NULL,
            'description' => 'Хорошее утро начинается с хорошего кофе!',
            'price' => 25200,
        ]);

        Product::insert([
            'name'    => 'Холодильник Haier',
            'code' => 'haier',
            'category_id' => 3,
            'image' => NULL,
            'description' => 'Для большой семьи - большой холодильник!',
            'price' => 40200,
        ]);

        Product::insert([
            'name'    => 'Блендер Moulinex',
            'code' => 'moulinex',
            'category_id' => 3,
            'image' => NULL,
            'description' => 'Для самых смелых идей!',
            'price' => 4200,
        ]);

        Product::insert([
            'name'    => 'Мясорубка Bosch',
            'code' => 'bosch',
            'category_id' => 3,
            'image' => NULL,
            'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
            'price' => 9200,
        ]);
    }
}
