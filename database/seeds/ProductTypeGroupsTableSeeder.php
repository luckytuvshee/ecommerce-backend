<?php

use Illuminate\Database\Seeder;

class ProductTypeGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ProductTypeGroup::create([
            'name' => 'Цамц',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Өмд',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Гутал',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Гадуур хувцас',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Дотуур хувцас',
        ]);
    }
}
