<?php

use App\Model\PropertyOption;
use Illuminate\Database\Seeder;

class PropertyOptionsSeeder extends Seeder
{
    public function run()
    {
        PropertyOption::insert([
            [
                'property_id'   => 1,
                'name'          => '64 Гб',
                'name_en'       => '64 Gb',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 1,
                'name'          => '128 Гб',
                'name_en'       => '128 Gb',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 1,
                'name'          => '256 Гб',
                'name_en'       => '256 Gb',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 2,
                'name'          => 'Белый',
                'name_en'       => 'White',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 2,
                'name'          => 'Черный',
                'name_en'       => 'Black',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 2,
                'name'          => 'Красный',
                'name_en'       => 'Red',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
            [
                'property_id'   => 2,
                'name'          => 'Синий',
                'name_en'       => 'Blue',
                'created_at'    => date_create(),
                'updated_at'    => date_create(),
            ],
        ]);
    }
}
