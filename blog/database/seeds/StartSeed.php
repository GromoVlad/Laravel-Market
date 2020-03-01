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
            'image' => 'categories/BT43ipv4Pl935iSYttvHG9oPYDihAwWxmmVmxIGG.jpeg',
        ]);

        Category::insert([
            'name'    => 'Портативная техника',
            'code' => 'portable',
            'description' => 'Раздел с портативной техникой.',
            'image' => 'categories/83NqYTNz1C9IRSWPt86Zs9wxDqga8AWKmkJffmzX.jpeg',
        ]);

        Category::insert([
            'name'    => 'Бытовая техника',
            'code' => 'appliances',
            'description' => 'Раздел с бытовой техникой',
            'image' => 'categories/DgK4jSL7eDWZrd3fNS3Ndo2PBcTF5XQATOEzh28a.jpeg',
        ]);
    }
}
