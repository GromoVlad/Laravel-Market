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
            'name'        => 'iPhone X 64GB',
            'code'        => 'iphone_x_64',
            'category_id' => 1,
            'image'       => 'products/6psVvU6jBgocGR9XMM33UWDodJ6VJfIE2St2bkua.jpeg',
            'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
            'price'       => 71990,
            'count'       => 5,
            'new'         => 1,
            'hit'         => 1,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'iPhone X 256GB',
            'code'        => 'iphone_x_256',
            'category_id' => 1,
            'image'       => 'products/oSBr2K2PFKUyq6f6AMTIpgPWsIe0QpIZBab2RKHt.jpeg',
            'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
            'price'       => 89990,
            'count'       => 5,
            'hit'         => 1,
            'recommend'   => 1,

        ]);

        Product::insert([
            'name'        => 'HTC One S',
            'code'        => 'htc_one_s',
            'category_id' => 1,
            'image'       => 'products/jFDiHLEhvJ56qW9b63pytyLk6EDqHQyIdw4uccyZ.png',
            'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
            'price'       => 12490,
            'new'         => 1,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'iPhone 5SE',
            'code'        => 'iphone_5se',
            'category_id' => 1,
            'image'       => 'products/Npxv3MeMjuLMSnI0I3hA68wdapEZQyWMutCJ6gCu.jpeg',
            'description' => 'Отличный классический iPhone',
            'price'       => 17300,
            'count'       => 5,
            'new'         => 1,
            'hit'         => 1,
        ]);

        Product::insert([
            'name'        => 'Наушники Beats Audio',
            'code'        => 'beats_audio',
            'category_id' => 2,
            'image'       => 'products/pr27sLUHNHm13V86MefeSW7swnSW6vhK2xOD40LA.jpeg',
            'description' => 'Отличный звук от Dr. Dre',
            'price'       => 8470,
            'count'       => 5,
            'new'         => 1,
        ]);

        Product::insert([
            'name'        => 'Камера GoPro',
            'code'        => 'gopro',
            'category_id' => 2,
            'image'       => 'products/1MFGQQ8n6aSO1q9bOrp5IokgZe1Gq0hpBGjrjx5i.jpeg',
            'description' => 'Снимай самые яркие моменты с помощью этой камеры',
            'price'       => 12000,
            'hit'         => 1,
        ]);

        Product::insert([
            'name'        => 'Камера Panasonic HC-V770',
            'code'        => 'panasonic_hc',
            'category_id' => 2,
            'image'       => 'products/o5XrQTD05qLzYRsUX9dQtV9AAUg93jvWpql0DuFO.jpeg',
            'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
            'price'       => 27900,
            'count'       => 0,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'Кофемашина DeLongi',
            'code'        => 'delongi',
            'category_id' => 3,
            'image'       => 'products/JdtQpkGPULkfulCpsC8f6BzJVwYB7lmTckFrbHEx.jpeg',
            'description' => 'Хорошее утро начинается с хорошего кофе!',
            'price'       => 25200,
            'count'       => 5,
            'new'         => 1,
            'hit'         => 1,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'Холодильник Haier',
            'code'        => 'haier',
            'category_id' => 3,
            'image'       => 'products/ge2bgr3IZQ2b7JA3dCRCoiHYQJcDdjBxAXSnRQVH.jpeg',
            'description' => 'Для большой семьи - большой холодильник!',
            'price'       => 40200,
            'count'       => 0,
            'hit'         => 1,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'Блендер Moulinex',
            'code'        => 'moulinex',
            'category_id' => 3,
            'image'       => 'products/fpLwPlTs9gvFdqBld5dLQqRsREU75RX4rj6hkg7g.jpeg',
            'description' => 'Для самых смелых идей!',
            'price'       => 4200,
            'count'       => 5,
            'new'         => 1,
            'recommend'   => 1,
        ]);

        Product::insert([
            'name'        => 'Мясорубка Bosch',
            'code'        => 'bosch',
            'category_id' => 3,
            'image'       => 'products/GToCs1xPvwu6XwsTIaFTZqHQ6V8hLoKDmOR7zsUo.jpeg',
            'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
            'price'       => 9200,
            'count'       => 5,
            'new'         => 1,
            'hit'         => 1,
        ]);
    }
}
