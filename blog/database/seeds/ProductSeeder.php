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
            'name'              => 'iPhone X 64GB',
            'code'              => 'iphone_x_64',
            'category_id'       => 1,
            'image'             => 'products/6psVvU6jBgocGR9XMM33UWDodJ6VJfIE2St2bkua.jpeg',
            'description'       => 'Отличный продвинутый телефон с памятью на 64 gb',
            'name_en'           => 'iPhone X 64GB',
            'description_en'    => 'Great advanced phone with 64 gb memory',
            'price'             => 71990,
            'count'             => 5,
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'iPhone X 256GB',
            'code'              => 'iphone_x_256',
            'category_id'       => 1,
            'image'             => 'products/oSBr2K2PFKUyq6f6AMTIpgPWsIe0QpIZBab2RKHt.jpeg',
            'description'       => 'Отличный продвинутый телефон с памятью на 256 gb',
            'name_en'           => 'iPhone X 256GB',
            'description_en'    => 'Great advanced phone with 256 gb memory',
            'price'             => 89990,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),

        ]);

        Product::insert([
            'name'              => 'HTC One S',
            'code'              => 'htc_one_s',
            'category_id'       => 1,
            'image'             => 'products/jFDiHLEhvJ56qW9b63pytyLk6EDqHQyIdw4uccyZ.png',
            'description'       => 'Зачем платить за лишнее? Легендарный HTC One S',
            'name_en'           => 'HTC One S',
            'description_en'    => 'Why pay for too much? Legendary HTC One S',
            'price'             => 12490,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'iPhone 5SE',
            'code'              => 'iphone_5se',
            'category_id'       => 1,
            'image'             => 'products/Npxv3MeMjuLMSnI0I3hA68wdapEZQyWMutCJ6gCu.jpeg',
            'description'       => 'Отличный классический iPhone',
            'name_en'           => 'iPhone 5SE',
            'description_en'    => 'Great classic iPhone',
            'price'             => 17300,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Наушники Beats Audio',
            'code'              => 'beats_audio',
            'category_id'       => 2,
            'image'             => 'products/pr27sLUHNHm13V86MefeSW7swnSW6vhK2xOD40LA.jpeg',
            'description'       => 'Отличный звук от Dr. Dre',
            'name_en'           => 'Headphones Beats Audio',
            'description_en'    => 'Great sound from Dr. Dre',
            'price'             => 8470,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Камера GoPro',
            'code'              => 'gopro',
            'category_id'       => 2,
            'image'             => 'products/1MFGQQ8n6aSO1q9bOrp5IokgZe1Gq0hpBGjrjx5i.jpeg',
            'description'       => 'Снимай самые яркие моменты с помощью этой камеры',
            'name_en'           => 'Camera GoPro',
            'description_en'    => 'Take the brightest moments with this camera',
            'price'             => 12000,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Камера Panasonic HC-V770',
            'code'              => 'panasonic_hc',
            'category_id'       => 2,
            'image'             => 'products/o5XrQTD05qLzYRsUX9dQtV9AAUg93jvWpql0DuFO.jpeg',
            'description'       => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
            'name_en'           => 'Camera Panasonic HC-V770',
            'description_en'    => 'For a serious video shoot you need a serious camera. Panasonic HC-V770 is the best choice for these purposes!',
            'price'             => 27900,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Кофемашина DeLongi',
            'code'              => 'delongi',
            'category_id'       => 3,
            'image'             => 'products/JdtQpkGPULkfulCpsC8f6BzJVwYB7lmTckFrbHEx.jpeg',
            'description'       => 'Хорошее утро начинается с хорошего кофе!',
            'name_en'           => 'CoffeeMachine DeLongi',
            'description_en'    => 'A good morning starts with good coffee!',
            'price'             => 25200,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Холодильник Haier',
            'code'              => 'haier',
            'category_id'       => 3,
            'image'             => 'products/ge2bgr3IZQ2b7JA3dCRCoiHYQJcDdjBxAXSnRQVH.jpeg',
            'description'       => 'Для большой семьи - большой холодильник!',
            'name_en'           => 'Refrigerator Haier',
            'description_en'    => 'For a big family - a big refrigerator!',
            'price'             => 40200,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Блендер Moulinex',
            'code'              => 'moulinex',
            'category_id'       => 3,
            'image'             => 'products/fpLwPlTs9gvFdqBld5dLQqRsREU75RX4rj6hkg7g.jpeg',
            'description'       => 'Для самых смелых идей!',
            'name_en'           => 'Blender Moulinex',
            'description_en'    => 'For the wildest ideas!',
            'price'             => 4200,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);

        Product::insert([
            'name'              => 'Мясорубка Bosch',
            'code'              => 'bosch',
            'category_id'       => 3,
            'image'             => 'products/GToCs1xPvwu6XwsTIaFTZqHQ6V8hLoKDmOR7zsUo.jpeg',
            'description'       => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
            'name_en'           =>  'Grinder Bosch',
            'description_en'    => 'Do you like homemade meatballs? You should definitely look at this meat grinder!',
            'price'             => 9200,
            'count'             => rand(0,5),
            'new'               => rand(0,1),
            'hit'               => rand(0,1),
            'recommend'         => rand(0,1),
        ]);
    }
}
