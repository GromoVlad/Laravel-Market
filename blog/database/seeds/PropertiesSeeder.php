<?php

use App\Model\Property;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    public function run()
    {
        Property::insert([
            [
                'name'          => 'Объем памяти',
                'name_en'       => 'Memory size',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'name'          => 'Цвет',
                'name_en'       => 'Color',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ]
        ]);
    }
}
