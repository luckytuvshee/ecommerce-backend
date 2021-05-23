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
            'name' => 'Жимс, ногоо',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Өдөр тутмын хүнс',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Талх, нарийн боов',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Чихэр, шоколад',
        ]);

        App\ProductTypeGroup::create([
            'name' => 'Ус, ундаа, жүүс',
        ]);
    }
}
