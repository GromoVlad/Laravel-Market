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
            'code'              => 'mobiles',
            'name'              => 'Мобильные телефоны',
            'description'       => 'В этом разделе вы найдёте самые популярные мобильные телефоны по отличным ценам!',
            'name_en'           => 'Mobile phones',
            'description_en'    => 'In this section you will find the most popular mobile phones at great prices!',
            'image'             => 'categories/BT43ipv4Pl935iSYttvHG9oPYDihAwWxmmVmxIGG.jpeg',
        ]);

        Category::insert([
            'name'              => 'Портативная техника',
            'code'              => 'portable',
            'description'       => 'Раздел с портативной техникой.',
            'name_en'           => 'Portable equipment',
            'description_en'    => 'Section with portable equipment.',
            'image'             => 'categories/83NqYTNz1C9IRSWPt86Zs9wxDqga8AWKmkJffmzX.jpeg',
        ]);

        Category::insert([
            'name'              => 'Бытовая техника',
            'code'              => 'appliances',
            'description'       => 'Раздел с бытовой техникой',
            'name_en'           => 'Household Appliances',
            'description_en'    => 'Section with household appliances',
            'image'             => 'categories/DgK4jSL7eDWZrd3fNS3Ndo2PBcTF5XQATOEzh28a.jpeg',
        ]);
    }
}
